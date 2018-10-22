<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

         view()->composer('layouts.side-bar', function($view){

            $view->with('archives', Post::getArchives());
            $view->with('tags', Tag::has('posts')->get());
         });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
