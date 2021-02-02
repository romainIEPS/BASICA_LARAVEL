<?php

namespace App\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class LatestPostsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('posts', Post::orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get());
    }
}