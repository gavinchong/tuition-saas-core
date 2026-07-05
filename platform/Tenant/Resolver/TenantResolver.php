<?php

declare(strict_types=1);

namespace Platform\Tenant\Resolver;

use Platform\Tenant\Context\TenantContext;

final class TenantResolver
{
    public function resolve(): void
    {
        // 1. Header-based (API SaaS style)
        $tenantId = request()->header('X-Tenant-ID');

        // 2. fallback: subdomain (future upgrade)
        $host = request()->getHost();

        if ($tenantId) {
            TenantContext::set([
                'id' => $tenantId,
                'source' => 'header',
            ]);

            return;
        }

        // fallback demo tenant (safe default for dev)
        TenantContext::set([
            'id' => 'default',
            'source' => 'fallback',
        ]);
    }
}
