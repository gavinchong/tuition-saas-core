<?php

declare(strict_types=1);

namespace Modules\Tenant\Domain\Models;

final class Branch
{
    public function __construct(
        public string $id,
        public string $organizationId,
        public string $name
    ) {}
}
