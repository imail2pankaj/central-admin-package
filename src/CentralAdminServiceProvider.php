<?php

namespace ScenicItSolutions\CentralAdmin;

use Illuminate\Support\ServiceProvider;

class CentralAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'central-admin');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/central-admin.php', 'central-admin');

        $this->registerPublishing();

        if (file_exists(__DIR__ . '/helpers.php')) {
            require __DIR__ . '/helpers.php';
        }
    }

    public function register()
    {
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/config' => config_path()], 'central-admin-config');
            $this->publishes([__DIR__.'/database/migrations' => database_path('migrations')], 'central-admin-migrations');
            $this->publishes([__DIR__.'/resources/assets' => public_path('vendor/laravel-admin')], 'central-admin-assets');
        }
    }    
}
