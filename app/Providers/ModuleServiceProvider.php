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


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(base_path('app/Modules/User/Routes/web.php'));
        // User Module Views
        $this->loadViewsFrom(base_path('app/Modules/User/Views'), 'user');

        // Blog Module
        $this->loadRoutesFrom(base_path('app/Modules/Blog/Routes/web.php'));
        $this->loadViewsFrom(base_path('app/Modules/Blog/Views'), 'blog');

    }
}
