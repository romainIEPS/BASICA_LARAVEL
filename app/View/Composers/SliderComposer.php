<?php

namespace App\View\Composers;

use App\Models\Work;
use Illuminate\View\View;

class SliderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('slides', Work::where('inSlider', 1)
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get());
    }
}