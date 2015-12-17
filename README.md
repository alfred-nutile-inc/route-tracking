# Simple Way To Track Route Usage


![report](https://dl.dropboxusercontent.com/s/kh042i76j6oa6w9/route_counted.png?dl=0)

See https://alfrednutile.info/posts/169 for more info.


## Installation


Run `composer require alfred-nutile-inc/route-tracking`


Setup the Provider `config/app.php`

~~~
    'providers' => [
      AlfredNutileInc\RouteTracking\RouteTrackingProvider::class,
~~~

Setup the Middleware adding this to your app/Http/Kernel.php

~~~
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \AlfredNutileInc\RouteTracking\RouteUsageTracker::class,
    ];
~~~


Make sure to run Migrations

~~~
php artisan vendor:publish

php artisan migrate
~~~

