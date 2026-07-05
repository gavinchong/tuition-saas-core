<?php

declare(strict_types=1);

namespace Platform\Shared\Infrastructure;

interface EventDispatcher
{
    public function dispatch(object $event): void;

    public function dispatchAll(array $events): void;
}
