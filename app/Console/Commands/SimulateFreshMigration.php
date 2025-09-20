<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SimulateFreshMigration extends Command
{
    protected $signature = 'app:simulate-fresh-migration';
    protected $description = 'Simulates what would happen when migrations run on a fresh server without modifying the actual database';

    public function handle()
    {
        $this->info('Simulating what would happen on a fresh server migration...');
        $this->info('This is a dry run - no changes will be made to your database.');
        $this->newLine();

        // List all migration files in order
        $migrationPath = database_path('migrations');
        $migrationFiles = glob($migrationPath . '/*.php');
        sort($migrationFiles);

        $this->info('The following migrations would run on a fresh server:');
        $this->newLine();

        // Group migrations by type for better analysis
        $tableCreations = [];
        $tableAlterations = [];
        $duplicateTableCreations = [];

        foreach ($migrationFiles as $file) {
            $filename = basename($file);
            $content = file_get_contents($file);
            
            // Check if this is a table creation migration
            if (preg_match('/Schema::create\([\'\"]([^\'\"]+)[\'\"]/', $content, $matches)) {
                $tableName = $matches[1];
                
                // Check if the creation has a safety check
                $hasSafetyCheck = preg_match('/if\s*\(\s*!\s*Schema::hasTable\([\'"]' . preg_quote($tableName, '/') . '[\'"]\)\s*\)\s*{/i', $content);
                
                if ($hasSafetyCheck) {
                    // This is safe, has conditional check
                    $this->info("- Creation of {$tableName} in {$filename} has safety check ✓");
                    $tableCreations[$tableName] = [$filename];
                } elseif (!isset($tableCreations[$tableName])) {
                    $tableCreations[$tableName] = [$filename];
                } else {
                    // Found a duplicate table creation without safety check
                    $duplicateTableCreations[$tableName][] = $filename;
                }
            }
            
            // Check if this is a table alteration migration
            if (preg_match('/Schema::table\([\'\"]([^\'\"]+)[\'\"]/', $content, $matches)) {
                $tableName = $matches[1];
                $tableAlterations[$tableName][] = $filename;
            }
        }
        
        // Report on all migrations
        $this->info('Table Creation Migrations:');
        foreach ($tableCreations as $table => $files) {
            $this->info("- {$table}: " . implode(', ', $files));
        }
        $this->newLine();
        
        // Show table alterations
        $this->info('Table Alteration Migrations:');
        foreach ($tableAlterations as $table => $files) {
            $this->info("- {$table}: " . implode(', ', $files));
        }
        $this->newLine();
        
        // Show potential issues
        if (!empty($duplicateTableCreations)) {
            $this->warn('⚠️ POTENTIAL ISSUES FOUND:');
            $this->error('Duplicate table creation migrations:');
            foreach ($duplicateTableCreations as $table => $files) {
                $this->error("- {$table} is created multiple times in: " . implode(', ', $files));
                $this->error("  This would cause a migration failure on a fresh installation!");
            }
            $this->newLine();
            
            // Suggest solutions
            $this->info('Recommended solution:');
            foreach ($duplicateTableCreations as $table => $files) {
                $this->info("1. Keep only one of these migrations for table '{$table}':");
                $this->info("   - " . implode(PHP_EOL . "   - ", $files));
                $this->info("2. Comment out the Schema::create call in the other file(s) or delete them");
                $this->info("3. Make sure alterations reference the correct fields and maintain the proper sequence");
            }
        }
        
        // Check for column conflicts in tour table alterations
        if (isset($tableAlterations['tours']) && count($tableAlterations['tours']) > 1) {
            $this->warn('Multiple alterations to the tours table found:');
            foreach ($tableAlterations['tours'] as $file) {
                $this->info("- {$file}");
            }
            
            // Read the content and check for duplicate column additions
            $columnAdditions = [];
            foreach ($tableAlterations['tours'] as $file) {
                $filePath = $migrationPath . '/' . $file;
                $content = file_get_contents($filePath);
                
                // Extract column additions using regex
                preg_match_all('/\$table->([^(]+)\([\'"]([^\'"]+)[\'"]/', $content, $matches, PREG_SET_ORDER);
                
                foreach ($matches as $match) {
                    $columnName = $match[2];
                    
                    // Check if the column addition has a safety check
                    $hasSafetyCheck = preg_match('/if\s*\(\s*!\s*Schema::hasColumn\([\'"]tours[\'"]\s*,\s*[\'"]' . preg_quote($columnName, '/') . '[\'"]/', $content);
                    
                    if ($hasSafetyCheck) {
                        // This column addition has a safety check
                        if (!isset($columnAdditions[$columnName])) {
                            $columnAdditions[$columnName] = ["✓" . $file]; // Mark as safe
                        }
                    } else {
                        if (!isset($columnAdditions[$columnName])) {
                            $columnAdditions[$columnName] = [$file];
                        } else {
                            $columnAdditions[$columnName][] = $file;
                        }
                    }
                }
            }
            
            // Report duplicate column additions
            $duplicateColumns = array_filter($columnAdditions, function($files) {
                // Count only files without safety checks (not starting with ✓)
                $unsafeFiles = array_filter($files, function($file) {
                    return substr($file, 0, 3) !== "✓";
                });
                return count($unsafeFiles) > 1;
            });
            
            if (!empty($duplicateColumns)) {
                $this->error('Found duplicate column additions across migrations:');
                foreach ($duplicateColumns as $column => $files) {
                    // Clean up the file names for display
                    $cleanFiles = array_map(function($file) {
                        return substr($file, 0, 3) === "✓" ? $file . " (has safety check)" : $file;
                    }, $files);
                    
                    $this->error("- Column '{$column}' is added in multiple files: " . implode(', ', $cleanFiles));
                }
                
                $this->info('Recommended solution:');
                $this->info("1. Ensure each column is only added in one migration");
                $this->info("2. Use conditional checks like 'if (!Schema::hasColumn(...))' for safety");
                $this->info("3. Consider consolidating your migrations");
            } else {
                $this->info("✓ All duplicate column additions have safety checks - this should work properly");
            }
        }
        
        $this->newLine();
        $this->info('Simulation complete. Your database was not modified.');
        
        if (!empty($duplicateTableCreations)) {
            return 1; // Return error status
        }
        
        return 0;
    }
}
