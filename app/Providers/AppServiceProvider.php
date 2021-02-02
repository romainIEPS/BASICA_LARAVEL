<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\View\Composers\SliderComposer;
use App\View\Composers\LatestPostsComposer;
use App\View\Composers\RecentWorksComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('home._slider', SliderComposer::class);
        View::composer('posts._latest', LatestPostsComposer::class);
        View::composer('works._recent', RecentWorksComposer::class);
    }
}
