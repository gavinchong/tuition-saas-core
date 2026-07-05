<?php

use Platform\Shared\Application\CommandBus;
use Modules\Tenant\Application\Commands\CreateTenantCommand;
use Platform\Tenant\Context\TenantContext;
use Platform\Auth\Context\AuthContext;

it('creates tenant via command bus', function () {

    // // ✅ BOOT STRATEGIC SAAS CONTEXT MANUALLY
    // TenantContext::set([
    //     'tenant_id' => 't1',
    //     'organization_id' => 'org-1',
    //     'branch_id' => 'b1',
    // ]);

    // AuthContext::set([
    //     'id' => 'user-1',
    //     'email' => 'demo@saas.com',
    // ]);

    // $this->bootSaasContext();

    // $bus = app(CommandBus::class);

    // $result = $bus->dispatch(
    //     new CreateTenantCommand('Acme')
    // );

    // expect($result->isSuccess())->toBeTrue();
});
