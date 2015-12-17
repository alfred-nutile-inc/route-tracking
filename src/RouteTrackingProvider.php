<?php


namespace AlfredNutileInc\RouteTracking;

use Illuminate\Support\ServiceProvider;

class RouteTrackingProvider extends ServiceProvider
{


    public function boot()
    {
        $this->publishes([
            __DIR__.'/2015_12_17_161204_route_usage_tracker_table.php' =>
                database_path('migrations'),
        ]);
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

