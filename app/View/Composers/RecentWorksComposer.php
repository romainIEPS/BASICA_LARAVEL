<?php

namespace App\View\Composers;

use App\Models\Work;
use Illuminate\View\View;

class RecentWorksComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('works', Work::orderBy('created_at', 'desc')
                                    ->take(6)
                                    ->get());
    }
}