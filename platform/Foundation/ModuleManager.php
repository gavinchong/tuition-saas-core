<?php

declare(strict_types=1);

namespace Platform\Foundation;

class ModuleManager
{
    public function __construct(
        protected ModuleRepository $repository
    ) {}

    public function register(): void
    {
        foreach ($this->repository->all() as $module) {
            app()->register($module->provider());
        }
    }
}
