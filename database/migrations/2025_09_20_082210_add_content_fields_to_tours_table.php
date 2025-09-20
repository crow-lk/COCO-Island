<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Modified to prevent conflicts on fresh installations
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            // Only add columns if they don't exist
            if (!Schema::hasColumn('tours', 'subtitle')) {
                $table->string('subtitle')->nullable()->after('title');
            }
            
            if (!Schema::hasColumn('tours', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            
            if (!Schema::hasColumn('tours', 'content')) {
                $table->longText('content')->nullable()->after('description');
            }
            
            if (!Schema::hasColumn('tours', 'hero_image')) {
                $table->string('hero_image')->nullable()->after('image_path');
            }
            
            if (!Schema::hasColumn('tours', 'duration')) {
                $table->string('duration')->nullable()->after('hero_image');
            }
            
            if (!Schema::hasColumn('tours', 'meta_title')) {
                $table->string('meta_title')->nullable()->after('duration');
            }
            
            if (!Schema::hasColumn('tours', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('meta_title');
            }
            
            if (!Schema::hasColumn('tours', 'highlights')) {
                $table->json('highlights')->nullable()->after('meta_description');
            }
            
            if (!Schema::hasColumn('tours', 'why_youll_love_it')) {
                $table->json('why_youll_love_it')->nullable()->after('highlights');
            }
            
            if (!Schema::hasColumn('tours', 'show_in_menu')) {
                $table->boolean('show_in_menu')->default(false)->after('is_active');
            }
            
            if (!Schema::hasColumn('tours', 'menu_order')) {
                $table->integer('menu_order')->default(0)->after('show_in_menu');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn([
                'subtitle',
                'slug',
                'content',
                'hero_image',
                'duration',
                'meta_title',
                'meta_description',
                'highlights',
                'why_youll_love_it',
                'show_in_menu',
                'menu_order'
            ]);
        });
    }
};
