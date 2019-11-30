<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('icon', function ($expression) {
            return '<svg class="svg-icon"><use xlink:href="/font-awesome-5.11.2/sprites/solid.svg#<?php echo "'.$expression.'" ?>"></use></svg>';
        });
    }
}