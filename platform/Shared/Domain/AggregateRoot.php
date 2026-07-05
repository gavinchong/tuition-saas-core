<?php

declare(strict_types=1);

namespace Platform\Shared\Domain;

abstract class AggregateRoot extends Entity
{
    private array $events = [];

    protected function record(object $event): void
    {
        $this->events[] = $event;
    }

    public function pullEvents(): array
    {
        $events = $this->events;
        $this->events = [];

        return $events;
    }
}
