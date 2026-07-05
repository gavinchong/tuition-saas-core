<?php

declare(strict_types=1);

namespace Platform\Auth\Context;

final class AuthContext
{
    private static ?array $user = null;

    public static function set(array $user): void
    {
        self::$user = $user;
    }

    public static function user(): ?array
    {
        return self::$user;
    }

    public static function id(): ?string
    {
        return self::$user['id'] ?? null;
    }

    public static function clear(): void
    {
        self::$user = null;
    }
}
