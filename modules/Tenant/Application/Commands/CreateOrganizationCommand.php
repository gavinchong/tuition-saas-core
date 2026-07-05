<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Commands;

use Platform\Shared\Application\Command;

final class CreateOrganizationCommand extends Command
{
    public function __construct(
        public string $name,
        public string $ownerId
    ) {}
}
