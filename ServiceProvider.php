<?php
namespace Extensions\Ian\Changelog;

use Extensions\Ian\Changelog\Providers\RouteServiceProvider;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'ian.changelog');
        $this->loadTranslationsFrom(__DIR__ . '/Resources/Lang', 'ian.changelog');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

    }

    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

}
