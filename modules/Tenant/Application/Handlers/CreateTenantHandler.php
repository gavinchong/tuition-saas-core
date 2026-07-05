<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Handlers;

use Modules\Tenant\Application\Commands\CreateTenantCommand;
use Platform\Shared\Application\Result;

final class CreateTenantHandler
{
    public function handle(CreateTenantCommand $command): Result
    {
        // simulate creation logic
        return Result::ok([
            'tenant_id' => uniqid(),
            'name' => $command->name,
        ]);
    }
}
