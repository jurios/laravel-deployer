<?php


namespace Kodilab\LaravelDeployer;


use Illuminate\Support\ServiceProvider;
use Kodilab\LaravelDeployer\Commands\DeployCommand;

class DeployerProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'../config/config.php' => config_path('deployer.php'),
        ], 'laravel-deployer-config');

        $this->commands([
            DeployCommand::class
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}