<?php

declare(strict_types=1);

namespace Platform\Shared\Domain;

abstract class Entity
{
    protected string $id;

    public function id(): string
    {
        return $this->id;
    }

    public function equals(Entity $other): bool
    {
        return $this->id === $other->id();
    }
}
