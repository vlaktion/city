<?php

namespace Vlaktion\City;

use Illuminate\Support\ServiceProvider;

class CityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/routes.php' => routes_path('city.php')
        ], 'routes');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}
