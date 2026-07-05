<?php

declare(strict_types=1);

namespace Platform\Foundation;

final class Platform
{
    public const NAME = 'ERP SaaS Platform';

    public const VERSION = '1.0.0';

    public static function version(): string
    {
        return self::VERSION;
    }

    public static function name(): string
    {
        return self::NAME;
    }
}
