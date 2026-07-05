<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Handlers;

use Modules\Tenant\Application\Commands\CreateOrganizationCommand;
use Platform\Shared\Application\Result;

final class CreateOrganizationHandler
{
    public function handle(CreateOrganizationCommand $command): Result
    {
        return Result::ok([
            'organization_id' => uniqid('org_'),
            'name' => $command->name,
            'owner_id' => $command->ownerId,
        ]);
    }
}
