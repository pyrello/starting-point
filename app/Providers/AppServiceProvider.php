<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $services = [
                Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
                InfyOm\Generator\InfyOmGeneratorServiceProvider::class,
                InfyOm\AdminLTETemplates\AdminLTETemplatesServiceProvider::class,
            ];
            foreach ($services as $service) {
                $this->app->register($service);
            }
        }
    }
}
