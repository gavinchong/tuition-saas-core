<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Services;

use Platform\Auth\Context\AuthContext;

final class MembershipService
{
    public function getRole(string $organizationId): string
    {
        // simulate DB lookup (replace later)
        return 'owner';
    }

    public function isOwner(string $organizationId): bool
    {
        return $this->getRole($organizationId) === 'owner';
    }

    public function currentUserId(): ?string
    {
        return AuthContext::id();
    }
}
