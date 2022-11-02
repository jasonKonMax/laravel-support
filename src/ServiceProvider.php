<?php

namespace Jasonkonmax\LaravelSupport;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/support.php' => config_path('support.php'),
        ]);
    }

    public function register(): void
    {
        $this->app->singleton(Uploader::class, function () {
            return new Uploader();
        });
    }
}