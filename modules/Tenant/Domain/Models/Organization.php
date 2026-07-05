<?php

declare(strict_types=1);

namespace Modules\Tenant\Domain\Models;

final class Organization
{
    public function __construct(
        public string $id,
        public string $name,
        public string $ownerId
    ) {}
}
