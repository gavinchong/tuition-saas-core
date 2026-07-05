<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Handlers;

use Modules\Tenant\Application\Commands\CreateTenantCommand;
use Platform\Shared\Application\Result;
use Platform\Tenant\Context\TenantContext;

final class CreateTenantHandler
{
    public function handle(CreateTenantCommand $command): Result
    {
        return Result::ok([
            'tenant_id' => TenantContext::id(),
            'created_id' => uniqid(),
            'name' => $command->name,
        ]);
    }
}
