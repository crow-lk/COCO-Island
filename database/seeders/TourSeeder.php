<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Initial popular tours
        Tour::create([
            'title' => 'Trails of Ramayanaya: Eternal Legacy',
            'description' => 'Walk in the footsteps of Rama, Sita, and Hanuman across Lanka',
            'image_path' => 'frontend/assets/img/tour/Ramayanaya.jpg',
            'route_name' => 'tours.ramayana',
            'is_popular' => true,
            'display_order' => 1,
            'is_active' => true,
        ]);
        
        Tour::create([
            'title' => 'The Emerald Isle Expedition',
            'description' => 'A perfect blend of beaches, hills, culture, and city charm',
            'image_path' => 'frontend/assets/img/tour/Emerald.jpg',
            'route_name' => 'tours.emerald-isle',
            'is_popular' => true,
            'display_order' => 2,
            'is_active' => true,
        ]);
        
        Tour::create([
            'title' => 'Tropical Shores & Golden Sunsets',
            'description' => 'Sun-drenched beaches, luxury stays, and endless coastal charm',
            'image_path' => 'frontend/assets/img/tour/Sunsets.jpg',
            'route_name' => 'tours.tropical-shores',
            'is_popular' => true,
            'display_order' => 3,
            'is_active' => true,
        ]);
    }
}
