<?php

namespace BlackBits\Formbuilder;

use Illuminate\Support\ServiceProvider;


class FormbuilderServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'formbuilder');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/formbuilder'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('Formbuilder', Formbuilder::class);
    }

    public function provides()
    {
        return ['Formbuilder'];
    }
}