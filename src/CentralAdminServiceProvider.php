<?php

namespace ScenicItSolutions\CentralAdmin;

use Illuminate\Support\ServiceProvider;

class CentralAdminServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'central-admin');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/central-admin.php','central-admin');
        $this->publishes([
            __DIR__.'/config/central-admin.php' => config_path('central-admin.php'),
        ]);

    }

    public function register() {

    }
}