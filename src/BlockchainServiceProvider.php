<?php

namespace Maxtee\Blockchain;

use Illuminate\Support\ServiceProvider;

class BlockchainServiceProvider extends ServiceProvider
{
    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = realpath(__DIR__.'/../resources/config/blockchain.php');

        $this->publishes([
            $config => config_path('blockchain.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-blockchain', function() {
            return new Blockchain;
        });
    }
    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-blockchain'];
    }
}
