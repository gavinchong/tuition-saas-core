<?php

declare(strict_types=1);

namespace Modules\Tenant\src;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class TenantServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadRoutes();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tenant');
    }

    private function loadRoutes(): void
    {
        $routesPath = __DIR__ . '/../routes/web.php';

        if (File::exists($routesPath)) {
            $this->loadRoutesFrom($routesPath);
        }
    }
}
