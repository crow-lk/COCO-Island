<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsletters = [
            [
                'email' => 'john.doe@example.com',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'jane.smith@example.com',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mike.wilson@example.com',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sarah.jones@example.com',
                'subscribed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'david.brown@example.com',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'emma.davis@example.com',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($newsletters as $newsletter) {
            DB::table(config('filamentblog.tables.prefix').'news_letters')->insert($newsletter);
        }
    }
}
