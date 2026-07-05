<?php

declare(strict_types=1);

namespace Platform\Support;

final class Path
{
    public static function base(string $path = ''): string
    {
        return base_path($path);
    }

    public static function modules(string $path = ''): string
    {
        return base_path('modules/'.$path);
    }

    public static function platform(string $path = ''): string
    {
        return base_path('platform/'.$path);
    }

    public static function config(string $path = ''): string
    {
        return config_path($path);
    }
}
