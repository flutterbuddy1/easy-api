<?php

namespace Flutterbuddy1\EasyApi;

use Carbon\Laravel\ServiceProvider;


class EasyApiServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/api.php");
    }

    public function register()
    {
        
    }

}