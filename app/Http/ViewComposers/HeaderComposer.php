<?php

namespace App\Http\ViewComposers;

use App\Models\Tour;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $activeTours = Tour::where('is_active', true)
            ->orderBy('title')
            ->get();
            
        $view->with('activeTours', $activeTours);
    }
}
