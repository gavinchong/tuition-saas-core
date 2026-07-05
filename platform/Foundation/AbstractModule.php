<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Platform\Contracts\ModuleInterface;

abstract class AbstractModule implements ModuleInterface
{
    abstract public function name(): string;

    abstract public function description(): string;

    abstract public function version(): string;

    public function register(): void
    {
    }

    public function boot(): void
    {
    }
}
