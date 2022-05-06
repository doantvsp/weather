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

    }
}
