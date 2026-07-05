<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Illuminate\Contracts\Events\Dispatcher;
use Platform\Shared\Infrastructure\EventDispatcher;

final class LaravelEventDispatcher implements EventDispatcher
{
    public function __construct(
        private Dispatcher $dispatcher
    ) {}

    public function dispatch(object $event): void
    {
        $this->dispatcher->dispatch($event);
    }

    public function dispatchAll(array $events): void
    {
        foreach ($events as $event) {
            $this->dispatch($event);
        }
    }
}
