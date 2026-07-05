<?php

declare(strict_types=1);

namespace Platform\Tenant\Resolver;

use Platform\Tenant\Context\TenantContext;

final class TenantResolver
{
    public function resolve(): void
    {
        $tenantId = request()->header('X-Tenant-ID');
        $orgId = request()->header('X-Org-ID');
        $branchId = request()->header('X-Branch-ID');

        TenantContext::set([
            'tenant_id' => $tenantId ?? 'default',
            'organization_id' => $orgId ?? 'org-default',
            'branch_id' => $branchId ?? 'branch-default',
            'source' => 'headers',
        ]);
    }
}
