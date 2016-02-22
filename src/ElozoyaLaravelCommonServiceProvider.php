<?php

namespace Elozoya\LaravelCommon;

use Illuminate\Support\ServiceProvider;

class ElozoyaLaravelCommonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'elcommon');
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
