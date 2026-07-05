<?php

declare(strict_types=1);

namespace Platform\Foundation\Pipes;

use Platform\Auth\Context\AuthContext;
use Platform\Shared\Application\Pipe;
use Platform\Tenant\Context\TenantContext;
use RuntimeException;

final class AuthorizationPipe implements Pipe
{
    public function handle(object $payload, callable $next): mixed
    {
        $userId = AuthContext::id();
        $orgId = TenantContext::organizationId();

        if (!$userId) {
            throw new RuntimeException('Unauthenticated');
        }

        if (!$orgId) {
            throw new RuntimeException('Organization context missing');
        }

        // future: role checks per command

        return $next($payload);
    }
}
