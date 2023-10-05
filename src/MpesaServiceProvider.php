<?php

namespace Gathuku\Mpesa;

use Gathuku\Mpesa\Console\InstallMpesa;
use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //publish the config files
            $this->publishes([
              __DIR__.'/../config/daraja.php' => config_path('daraja.php'),
          ], 'mpesa-config');

            // Register commands
            $this->commands([
            InstallMpesa::class,
          ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/daraja.php', 'mpesa');

        $this->app->bind('gathuku-mpesa', function () {
            return new Mpesa();
        });
    }
}
