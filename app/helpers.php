<?php

if (!function_exists('localized_route')) {
    /**
     * Generate a localized route URL
     *
     * @param string $name
     * @param array $parameters
     * @param string|null $locale
     * @return string
     */
    function localized_route($name, $parameters = [], $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        
        // Add locale to the beginning of parameters array
        $parameters = array_merge(['locale' => $locale], $parameters);
        
        return route($name, $parameters);
    }
}

if (!function_exists('current_route_localized')) {
    /**
     * Get the current route in a different locale
     *
     * @param string $locale
     * @return string
     */
    function current_route_localized($locale)
    {
        $currentRoute = request()->route();
        if (!$currentRoute) {
            return route('home', ['locale' => $locale]);
        }
        
        $routeName = $currentRoute->getName();
        $parameters = $currentRoute->parameters();
        
        // Replace the locale parameter
        $parameters['locale'] = $locale;
        
        try {
            return route($routeName, $parameters);
        } catch (\Exception $e) {
            // If route generation fails, default to home
            return route('home', ['locale' => $locale]);
        }
    }
}
