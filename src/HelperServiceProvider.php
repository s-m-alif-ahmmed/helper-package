<?php

namespace AlifAhmmed\HelpersPackage;

use Illuminate\Support\ServiceProvider;
use AlifAhmmed\HelpersPackage\Helpers\Helper;

class HelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the helper class as a singleton
        $this->app->singleton('helper', function () {
            return new Helper();
        });
    }

    public function boot()
    {
        //
    }
}

