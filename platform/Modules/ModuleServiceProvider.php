<?php

declare(strict_types=1);

namespace Platform\Modules;

use Illuminate\Support\ServiceProvider;
use Platform\Foundation\EventBus;
use Platform\Foundation\ModuleManager;
use Platform\Foundation\ModuleRepository;

class ModuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ModuleRepository::class);
        $this->app->singleton(ModuleManager::class);

        $this->app->singleton(EventBus::class);

        $this->app->bind(
            \Platform\Shared\Infrastructure\EventDispatcher::class,
            \Platform\Foundation\LaravelEventDispatcher::class
        );
    }

    public function boot(ModuleManager $manager): void
    {
        $manager->register();
    }
}
