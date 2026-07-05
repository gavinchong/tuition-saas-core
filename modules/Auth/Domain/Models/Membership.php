<?php

declare(strict_types=1);

namespace Modules\Tenant\Domain\Models;

final class Membership
{
    public function __construct(
        public string $id,
        public string $userId,
        public string $organizationId,
        public string $role // owner | admin | staff
    ) {}
}
