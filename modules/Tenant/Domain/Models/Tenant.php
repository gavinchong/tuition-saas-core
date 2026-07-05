<?php

declare(strict_types=1);

namespace Modules\Tenant\Domain\Models;

final class Tenant
{
    public function __construct(
        public string $id,
        public string $name,
        public array $data = []
    ) {}
}
