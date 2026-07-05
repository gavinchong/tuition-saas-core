<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Validators;

use Modules\Tenant\Application\Commands\CreateTenantCommand;
use Platform\Shared\Application\Validator;

final class CreateTenantCommandValidator implements Validator
{
    public function validate(object $command): void
    {
        if (!$command instanceof CreateTenantCommand) {
            return;
        }

        if (empty($command->name)) {
            throw new \InvalidArgumentException('Tenant name is required');
        }
    }
}
