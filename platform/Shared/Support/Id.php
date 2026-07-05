<?php

declare(strict_types=1);

namespace Platform\Shared\Support;

use Illuminate\Support\Str;

final class Id
{
    public static function new(): string
    {
        return (string) Str::ulid();
    }
}
