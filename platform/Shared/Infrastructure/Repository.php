<?php

declare(strict_types=1);

namespace Platform\Shared\Infrastructure;

interface Repository
{
    public function find(string $id): mixed;

    public function save(mixed $entity): void;
}
