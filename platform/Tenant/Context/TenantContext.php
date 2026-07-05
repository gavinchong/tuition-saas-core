<?php

declare(strict_types=1);

namespace Platform\Tenant\Context;

final class TenantContext
{
    private static ?array $tenant = null;

    public static function set(array $tenant): void
    {
        self::$tenant = $tenant;
    }

    public static function get(): ?array
    {
        return self::$tenant;
    }

    public static function id(): ?string
    {
        return self::$tenant['id'] ?? null;
    }

    public static function clear(): void
    {
        self::$tenant = null;
    }
}
