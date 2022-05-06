<?php
namespace doantv\weather;

use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routers/web.php');

    }
    public function register()
    {
        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });
    }
}
