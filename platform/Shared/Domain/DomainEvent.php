<?php

declare(strict_types=1);

namespace Platform\Shared\Domain;

interface DomainEvent
{
    public function occurredAt(): \DateTimeImmutable;
}
