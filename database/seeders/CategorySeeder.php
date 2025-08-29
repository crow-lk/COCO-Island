<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Food & Cooking',
                'slug' => 'food-cooking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health & Fitness',
                'slug' => 'health-fitness',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Business & Finance',
                'slug' => 'business-finance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            DB::table(config('filamentblog.tables.prefix').'categories')->insert($category);
        }
    }
}
