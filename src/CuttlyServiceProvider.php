<?php

declare(strict_types=1);

namespace Slvler\Cuttly;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

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
