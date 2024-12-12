<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // User Module Routes
        $this->loadRoutesFrom(base_path('app/Modules/User/Routes/web.php'));

        // User Module Views
        $this->loadViewsFrom(base_path('app/Modules/User/Views'), 'user');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
