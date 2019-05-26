<?php

namespace RossMcNeil\GoogleFontsLoader;

use Illuminate\Support\ServiceProvider;

class GoogleFontsLoaderServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rossmcneil');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'rossmcneil');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/googlefontsloader.php', 'googlefontsloader');

        // Register the service the package provides.
        $this->app->singleton('googlefontsloader', function ($app) {
            return new GoogleFontsLoader;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['googlefontsloader'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/googlefontsloader.php' => config_path('googlefontsloader.php'),
        ], 'googlefontsloader.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/rossmcneil'),
        ], 'googlefontsloader.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/rossmcneil'),
        ], 'googlefontsloader.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/rossmcneil'),
        ], 'googlefontsloader.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
