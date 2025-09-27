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

    /**
     * Show the modern Tailwind-based homepage.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function modernIndex()
    {
        try {
            // Get all active and popular tours for the modern design
            $popularTours = Tour::where('is_popular', true)
                               ->where('is_active', true)
                               ->orderBy('display_order')
                               ->get();
            
            Log::debug('Popular tours loaded for modern view: ' . $popularTours->count());
        } catch (\Exception $e) {
            Log::error('Error loading tours for modern view: ' . $e->getMessage());
            $popularTours = collect(); // Empty collection as fallback
        }
        
        // Set locale if not already set
        if (!session()->has('locale')) {
            session(['locale' => 'en']);
            app()->setLocale('en');
        }
        
        return view('modern-home', [
            'popularTours' => $popularTours,
            'currentLocale' => app()->getLocale()
        ]);
    }

    /**
     * Show the modern packages page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function modernPackages()
    {
        try {
            // Get all active and popular tours for the packages page
            $popularTours = Tour::where('is_popular', true)
                               ->where('is_active', true)
                               ->orderBy('display_order')
                               ->get();
            
            Log::debug('Tours loaded for modern packages view: ' . $popularTours->count());
        } catch (\Exception $e) {
            Log::error('Error loading tours for modern packages view: ' . $e->getMessage());
            $popularTours = collect(); // Empty collection as fallback
        }
        
        return view('modern-packages', [
            'popularTours' => $popularTours
        ]);
    }

    /**
     * Handle contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Log the contact form submission
            Log::info('Contact form submitted', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            // Here you could add email sending functionality
            // Mail::to('admin@cocoislandholidays.com')->send(new ContactFormMail($request->all()));

            // Redirect back with success message
            return redirect()->route('contact', app()->getLocale())
                ->with('success', 'Thank you for your message! We will contact you soon.');

        } catch (\Exception $e) {
            Log::error('Error processing contact form: ' . $e->getMessage());
            
            return redirect()->route('contact', app()->getLocale())
                ->with('error', 'Sorry, there was an error sending your message. Please try again.')
                ->withInput();
        }
    }
}
