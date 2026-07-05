<?php

declare(strict_types=1);

namespace Platform\Tenant\Support;

final class Roles
{
    public const OWNER = 'owner';
    public const ADMIN = 'admin';
    public const STAFF = 'staff';

    public static function all(): array
    {
        return [
            self::OWNER,
            self::ADMIN,
            self::STAFF,
        ];
    }

    public static function isPrivileged(string $role): bool
    {
        return in_array($role, [
            self::OWNER,
            self::ADMIN,
        ]);
    }
}
