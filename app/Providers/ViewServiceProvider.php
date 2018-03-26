<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*','App\Providers\ViewComposers\SiteComposer');
        View::composer('*','App\Providers\ViewComposers\NewsComposer');
        View::composer('*','App\Providers\ViewComposers\BreadComposer');
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
