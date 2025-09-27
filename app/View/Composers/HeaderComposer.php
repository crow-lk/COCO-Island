<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Tour;

class HeaderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menuTours = Tour::where('is_active', true)
            ->where('show_in_menu', true)
            ->orderBy('menu_order')
            ->orderBy('display_order')
            ->select('title', 'slug')
            ->get();

        $view->with('menuTours', $menuTours);
    }
}
