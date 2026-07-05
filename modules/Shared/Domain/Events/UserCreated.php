<?php

declare(strict_types=1);

namespace Modules\Shared\Domain\Events;

use DateTimeImmutable;
use Platform\Shared\Domain\DomainEvent;

final class UserCreated implements DomainEvent
{
    public function __construct(
        public readonly string $userId,
        public readonly DateTimeImmutable $occurredAt = new DateTimeImmutable()
    ) {}

    public function occurredAt(): DateTimeImmutable
    {
        return $this->occurredAt;
    }
}
