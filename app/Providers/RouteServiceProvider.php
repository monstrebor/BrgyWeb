<?php

// app/Providers/RouteServiceProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register the guest middleware (RedirectIfAuthenticated)
        Route::aliasMiddleware('guest', \App\Http\Middleware\RedirectIfAuthenticated::class);
        Route::aliasMiddleware('admin', \App\Http\Middleware\Authenticate::class);

        parent::boot();
    }

    /**
     * Register the application's route middleware.
     */
    public function map(): void
    {
        // Define your routes here
    }
}

