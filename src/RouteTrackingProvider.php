<?php


namespace AlfredNutileInc\RouteTracking;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class RouteTrackingProvider extends ServiceProvider
{


    public function boot(Application $app)
    {
        $source = realpath( __DIR__.'/migrations/');
        if ($app->runningInConsole()) {
            $this->publishes([$source => database_path('migrations')], 'migrations');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}

