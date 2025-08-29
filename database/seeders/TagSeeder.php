<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Apps',
                'slug' => 'mobile-apps',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AI & Machine Learning',
                'slug' => 'ai-machine-learning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cybersecurity',
                'slug' => 'cybersecurity',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cloud Computing',
                'slug' => 'cloud-computing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Science',
                'slug' => 'data-science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($tags as $tag) {
            DB::table(config('filamentblog.tables.prefix').'tags')->insert($tag);
        }
    }
}
