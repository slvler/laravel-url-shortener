<?php

namespace Slvler\Cuttly;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;



class CuttlyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/cuttly.php' => config_path('cuttly.php'),
            ], 'config');
        }
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cuttly.php', 'cuttly');

        $this->app->singleton('cuttly', function (Container $app) {
            return new Cuttly($app);
        });
    }
}
