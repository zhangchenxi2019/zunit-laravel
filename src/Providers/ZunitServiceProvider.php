<?php

namespace  Zhangchenxi2019\ZunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class ZunitServiceProvider  extends ServiceProvider{


    public function register()
    {
        $this->registerRoutes();


        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', '1zunit'
        );
    }


    public function boot()
    {

    }


    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Zhangchenxi2019\ZunitLaravel\Http\Controllers',
            'prefix' => 'zunit',
            'middleware' => 'web',
        ];
    }

}