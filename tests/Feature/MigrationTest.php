<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class MigrationTest extends TestCase
{
    /**
     * Test if migrations run successfully on a fresh database.
     *
     * @return void
     */
    public function test_migrations_run_successfully()
    {
        // Use in-memory SQLite database
        config(['database.connections.sqlite.database' => ':memory:']);
        
        // Set the default database connection to sqlite
        config(['database.default' => 'sqlite']);
        
        // Create a fresh database connection
        $this->app['db']->purge();
        $this->app->make('db');
        
        // Force recreate the SQLite database
        DB::disconnect();
        
        // Run migrations with standard migrate command (not fresh, to simulate a real first run)
        $result = Artisan::call('migrate', ['--no-interaction' => true]);
        
        // Check if the command executed successfully
        $this->assertEquals(0, $result, 'Migration failed to run');
        
        // Verify that key tables exist
        $this->assertTrue(Schema::hasTable('users'), 'Users table not created');
        $this->assertTrue(Schema::hasTable('migrations'), 'Migrations table not created');
        $this->assertTrue(Schema::hasTable('tours'), 'Tours table not created');
        
        // List all tables created - SQLite specific approach
        $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'");
        $tableNames = array_map(function($table) {
            return $table->name;
        }, $tables);
        
        // Output created tables (will show in test results)
        echo "Tables created: " . implode(', ', $tableNames) . "\n";
        
        // Verify all expected columns exist in the tours table
        if (Schema::hasTable('tours')) {
            // Base columns
            $this->assertTrue(Schema::hasColumn('tours', 'title'), 'Tours table missing title column');
            $this->assertTrue(Schema::hasColumn('tours', 'description'), 'Tours table missing description column');
            $this->assertTrue(Schema::hasColumn('tours', 'image_path'), 'Tours table missing image_path column');
            
            // Added columns from the content fields migrations
            $this->assertTrue(Schema::hasColumn('tours', 'slug'), 'Tours table missing slug column');
            $this->assertTrue(Schema::hasColumn('tours', 'subtitle'), 'Tours table missing subtitle column');
            $this->assertTrue(Schema::hasColumn('tours', 'content'), 'Tours table missing content column');
            $this->assertTrue(Schema::hasColumn('tours', 'hero_image'), 'Tours table missing hero_image column');
            $this->assertTrue(Schema::hasColumn('tours', 'show_in_menu'), 'Tours table missing show_in_menu column');
            $this->assertTrue(Schema::hasColumn('tours', 'menu_order'), 'Tours table missing menu_order column');
            
            // Get and display all columns for debugging
            $columns = Schema::getColumnListing('tours');
            echo "Tours table columns: " . implode(', ', $columns) . "\n";
        }
    }
}
