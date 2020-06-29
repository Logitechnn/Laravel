<?php


namespace App;

use Illuminate\Support\ServiceProvider;


class NotificationsService extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/appstore-server-notifications.php' => config_path('appstore-server-notifications.php'),
            ], 'config');
        }

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/appstore-server-notifications.php', 'appstore-server-notifications');
    }
}
