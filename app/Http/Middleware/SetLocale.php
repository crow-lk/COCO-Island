<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Available languages for COCO Island Holidays
        $availableLocales = ['en', 'si', 'ta', 'de', 'fr', 'ru', 'zh'];
        
        // Get locale from route parameter first, then URL segment, then session
        $locale = $request->route('locale') ?? $request->segment(1);
        
        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            // If no locale in URL, use session or default
            $sessionLocale = Session::get('locale', 'en');
            App::setLocale($sessionLocale);
            
            // If this is the root path, redirect to default locale
            if ($request->path() === '/') {
                return redirect("/{$sessionLocale}");
            }
        }

        return $next($request);
    }
}
