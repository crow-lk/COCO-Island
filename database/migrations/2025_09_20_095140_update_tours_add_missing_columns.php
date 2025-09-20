<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            // Only add columns if they don't exist
            if (!Schema::hasColumn('tours', 'slug')) {
                $table->string('slug')->after('title')->nullable()->unique();
            }
            
            if (!Schema::hasColumn('tours', 'subtitle')) {
                $table->string('subtitle')->after('title')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'content')) {
                $table->longText('content')->after('description')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'hero_image')) {
                $table->string('hero_image')->after('image_path')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'duration')) {
                $table->string('duration')->after('hero_image')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'meta_title')) {
                $table->string('meta_title')->after('duration')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'meta_description')) {
                $table->text('meta_description')->after('meta_title')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'highlights')) {
                $table->json('highlights')->after('meta_description')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'why_youll_love_it')) {
                $table->json('why_youll_love_it')->after('highlights')->nullable();
            }
            
            if (!Schema::hasColumn('tours', 'show_in_menu')) {
                $table->boolean('show_in_menu')->after('is_active')->default(false);
            }
            
            if (!Schema::hasColumn('tours', 'menu_order')) {
                $table->integer('menu_order')->after('show_in_menu')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $columns = [
                'slug', 'subtitle', 'content', 'hero_image', 
                'duration', 'meta_title', 'meta_description', 
                'highlights', 'why_youll_love_it', 'show_in_menu', 
                'menu_order'
            ];
            
            foreach ($columns as $column) {
                if (Schema::hasColumn('tours', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
