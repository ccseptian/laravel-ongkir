<?php

namespace Tian\Larajaongkir;

use Illuminate\Support\ServiceProvider;

class LarajaongkirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Tian\Larajaongkir\LarajaongkirController');
    }
}
