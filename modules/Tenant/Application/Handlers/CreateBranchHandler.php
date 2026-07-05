<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Handlers;

use Modules\Tenant\Application\Commands\CreateBranchCommand;
use Platform\Shared\Application\Result;

final class CreateBranchHandler
{
    public function handle(CreateBranchCommand $command): Result
    {
        return Result::ok([
            'branch_id' => uniqid('br_'),
            'organization_id' => $command->organizationId,
            'name' => $command->name,
        ]);
    }
}
