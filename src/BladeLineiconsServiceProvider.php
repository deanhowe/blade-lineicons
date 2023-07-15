<?php

declare(strict_types=1);

namespace Datlechin\Lineicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeLineiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-lineicons', []);

            $factory->add('lineicons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-lineicons.php', 'blade-lineicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-lineicons'),
            ], 'blade-lineicons');

            $this->publishes([
                __DIR__ . '/../config/blade-lineicons.php' => $this->app->configPath('blade-lineicons.php'),
            ], 'blade-lineicons-config');
        }
    }
}
