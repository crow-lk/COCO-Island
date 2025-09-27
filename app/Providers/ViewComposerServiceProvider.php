<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\HeaderComposer;
use App\View\Composers\HeaderComposer as NewHeaderComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using class based composers...
        View::composer('components.header', HeaderComposer::class);
        View::composer('components.header', NewHeaderComposer::class);
    }
}
