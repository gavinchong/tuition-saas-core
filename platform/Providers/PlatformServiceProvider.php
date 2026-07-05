<?php

declare(strict_types=1);

namespace Platform\Providers;

use Illuminate\Support\ServiceProvider;
use Platform\Foundation\Platform;

class PlatformServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Platform::class, function () {
            return new Platform();
        });
    }

    public function boot(): void
    {
    }
}
