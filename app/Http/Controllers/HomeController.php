<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        try {
            // Clear any view cache to ensure we're getting fresh data
            // Note: This is useful for development, but you might want to remove 
            // in production for performance reasons
            \Illuminate\Support\Facades\Artisan::call('view:clear');
            
            // Get all active and popular tours ordered by display_order
            // Force query to not use cache
            $popularTours = Tour::where('is_popular', true)
                               ->where('is_active', true)
                               ->orderBy('display_order')
                               ->get();
            
            // Debug info to help diagnose issues
            Log::debug('Popular tours loaded: ' . $popularTours->count());
            
            // If no tours found, check if there are any tours that might be inactive
            if ($popularTours->isEmpty()) {
                $allTours = Tour::where('is_popular', true)->get();
                $activeTours = Tour::where('is_active', true)->get();
                
                Log::info('No active popular tours found. Total popular tours (including inactive): ' . $allTours->count());
                Log::info('Total active tours (including non-popular): ' . $activeTours->count());
                
                // Just for troubleshooting, let's check ALL tours
                $allToursCount = Tour::count();
                Log::info('Total tours in database: ' . $allToursCount);
            }
        } catch (\Exception $e) {
            Log::error('Error loading tours: ' . $e->getMessage());
            $popularTours = collect(); // Empty collection as fallback
        }
        
        // Add cache buster to ensure we're not getting cached results
        return view('index', [
            'popularTours' => $popularTours,
            'cacheBuster' => time()
        ]);
    }
}
