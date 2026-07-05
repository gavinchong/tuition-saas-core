<?php

trait WithSaasContext
{
    protected function bootSaasContext(): void
    {
        \Platform\Tenant\Context\TenantContext::set([
            'tenant_id' => 't1',
            'organization_id' => 'org-1',
            'branch_id' => 'b1',
        ]);

        \Platform\Auth\Context\AuthContext::set([
            'id' => 'user-1',
        ]);
    }
}
