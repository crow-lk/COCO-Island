<?php

namespace Database\Seeders;

use App\Models\LimitedTimeOffer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class LimitedTimeOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicDisk = Storage::disk('public');
        $sourceImage = public_path('frontend/assets/img/12days.jpeg');
        $targetImage = 'limited-time-offers/12days.jpeg';

        if (file_exists($sourceImage) && ! $publicDisk->exists($targetImage)) {
            $publicDisk->put($targetImage, file_get_contents($sourceImage));
        }

        $heroImagePath = $publicDisk->exists($targetImage)
            ? 'storage/' . $targetImage
            : 'frontend/assets/img/12days.jpeg';

        LimitedTimeOffer::updateOrCreate(
            ['offer_title' => 'Sri Lanka Scenic Escapes'],
            [
                'section_label' => 'Limited Time Offer',
                'section_icon' => 'fas fa-fire',
                'section_title' => 'Exclusive Sri Lanka Experience',
                'floating_badge_text' => 'HOT DEAL',
                'floating_badge_icon' => '🔥',
                'hero_image' => $heroImagePath,
                'offer_duration' => '12 Days & 11 Nights Tour in Sri Lanka',
                'offer_highlight' => 'Signature Sri Lanka Experience',
                'offer_summary' => 'Explore ancient cities, misty highlands, golden beaches, and vibrant culture with our expertly crafted itinerary. Every day is packed with highlights, comfort, and authentic local experiences.',
                'highlights' => [
                    ['icon' => 'fas fa-plane-arrival', 'text' => 'Airport Welcome & Transfers'],
                    ['icon' => 'fas fa-mountain', 'text' => 'Sigiriya Rock Fortress'],
                    ['icon' => 'fas fa-leaf', 'text' => 'Pinnawala Elephant Orphanage'],
                    ['icon' => 'fas fa-spa', 'text' => 'Hot Air Ballooning (Nov-May)'],
                    ['icon' => 'fas fa-tree', 'text' => 'Anuradhapura & Polonnaruwa'],
                    ['icon' => 'fas fa-water', 'text' => 'Village Tour & Tea Safari'],
                    ['icon' => 'fas fa-umbrella-beach', 'text' => 'Beach Relaxation in Galle'],
                    ['icon' => 'fas fa-city', 'text' => 'Colombo City & Shopping Tour'],
                ],
                'regular_price' => 2500,
                'special_price' => 1800,
                'currency' => 'USD',
                'price_note' => 'Per Person',
                'savings_text' => 'Save $700 (28% OFF)',
                'countdown_label' => '⏰ Offer Ends In:',
                'countdown_ends_at' => Carbon::create(2025, 12, 31, 23, 59, 59),
                'countdown_enabled' => true,
                'primary_cta_label' => 'Book This Exclusive Offer',
                'primary_cta_url' => 'https://wa.me/94776605054',
                'primary_cta_icon' => 'fab fa-whatsapp',
                'secondary_ctas' => [
                    [
                        'label' => 'More Details',
                        'url' => '#',
                        'icon' => 'fas fa-info-circle',
                    ],
                    [
                        'label' => 'Share Offer',
                        'url' => '#',
                        'icon' => 'fas fa-share-alt',
                    ],
                ],
                'trust_indicators' => [
                    ['icon' => 'fas fa-shield-alt', 'text' => 'Secure Booking'],
                    ['icon' => 'fas fa-undo', 'text' => 'Free Cancellation'],
                    ['icon' => 'fas fa-headset', 'text' => '24/7 Support'],
                ],
                'bottom_note' => '⚡ Only 5 spots remaining for this exclusive experience!',
                'bottom_badge_text' => 'Limited time offer - Book now to secure your spot!',
                'bottom_badge_icon' => 'fas fa-clock',
                'is_active' => true,
                'display_order' => 1,
            ]
        );
    }
}
