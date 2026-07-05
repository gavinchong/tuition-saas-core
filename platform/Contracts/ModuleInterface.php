<?php

declare(strict_types=1);

namespace Platform\Contracts;

interface ModuleInterface
{
    public function name(): string;

    public function description(): string;

    public function version(): string;

    public function register(): void;

    public function boot(): void;
}
