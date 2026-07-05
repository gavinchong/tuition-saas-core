<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Platform\Shared\Infrastructure\EventDispatcher;

final class EventBus
{
    public function __construct(
        private EventDispatcher $dispatcher
    ) {}

    public function publish(object $aggregate): void
    {
        if (!method_exists($aggregate, 'pullEvents')) {
            return;
        }

        $events = $aggregate->pullEvents();

        $this->dispatcher->dispatchAll($events);
    }
}
