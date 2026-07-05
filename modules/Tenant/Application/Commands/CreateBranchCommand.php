<?php

declare(strict_types=1);

namespace Modules\Tenant\Application\Commands;

use Platform\Shared\Application\Command;

final class CreateBranchCommand extends Command
{
    public function __construct(
        public string $organizationId,
        public string $name
    ) {}
}
