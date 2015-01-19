<?php namespace Nwidart\LaravelBroadway;

use Illuminate\Support\ServiceProvider;

class LaravelBroadwayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->package('nwidart/laravel-broadway');

        $this->app->register('Nwidart\LaravelBroadway\Broadway\EventServiceProvider');
        $this->app->register('Nwidart\LaravelBroadway\Broadway\CommandServiceProvider');
        $this->app->register('Nwidart\LaravelBroadway\Broadway\SerializersServiceProvider');
        $this->app->register('Nwidart\LaravelBroadway\Broadway\EventStorageServiceProvider');
        $this->app->register('Nwidart\LaravelBroadway\Broadway\SupportServiceProvider');
        $this->app->register('Nwidart\LaravelBroadway\Broadway\ElasticSearchServiceProvider');
    }
}