<?php

declare(strict_types=1);

namespace Modules\Auth\Domain\Models;

final class User
{
    public function __construct(
        public string $id,
        public string $email,
        public string $name
    ) {}
}
