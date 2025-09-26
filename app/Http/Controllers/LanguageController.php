<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    /**
     * Available languages for COCO Island Holidays
     */
    private $availableLanguages = [
        'en' => 'English',
        'si' => 'සිංහල', 
        'ta' => 'தமிழ்',
        'de' => 'Deutsch',
        'fr' => 'Français', 
        'ru' => 'Русский',
        'zh' => '中文'
    ];

    /**
     * Switch language and store in session
     */
    public function switch(Request $request, $locale)
    {
        // Validate locale
        if (!array_key_exists($locale, $this->availableLanguages)) {
            abort(404);
        }

        // Store locale in session
        Session::put('locale', $locale);
        App::setLocale($locale);

        // Get the previous URL or redirect to home
        $previousUrl = url()->previous();
        $parsedUrl = parse_url($previousUrl);
        $path = $parsedUrl['path'] ?? '/';
        
        // Remove any existing locale from the path
        $pathSegments = explode('/', trim($path, '/'));
        if (!empty($pathSegments) && array_key_exists($pathSegments[0], $this->availableLanguages)) {
            // Remove the first segment (current locale)
            array_shift($pathSegments);
            $path = '/' . implode('/', $pathSegments);
        }
        
        // Ensure path starts with slash if not empty
        if ($path !== '/' && !empty($path) && $path[0] !== '/') {
            $path = '/' . $path;
        }
        
        // If path is empty or just slash, default to homepage
        if (empty($path) || $path === '/') {
            $path = '';
        }
        
        // Build new URL with selected locale
        $newUrl = "/{$locale}{$path}";
        
        return redirect($newUrl);
    }

    /**
     * Get available languages for API/AJAX requests
     */
    public function getAvailableLanguages()
    {
        return response()->json([
            'current' => app()->getLocale(),
            'available' => $this->availableLanguages
        ]);
    }

    /**
     * Auto-detect user's preferred language
     */
    public function autoDetect(Request $request)
    {
        // Priority: 1. Session, 2. Browser, 3. Default
        $sessionLocale = Session::get('locale');
        if ($sessionLocale && array_key_exists($sessionLocale, $this->availableLanguages)) {
            return redirect("/{$sessionLocale}");
        }

        // Check browser language
        $browserLanguage = $request->getPreferredLanguage(array_keys($this->availableLanguages));
        if ($browserLanguage) {
            return redirect("/{$browserLanguage}");
        }

        // Default to English
        return redirect('/en');
    }
}
