<?php

declare(strict_types=1);

namespace Platform\Support;

use Illuminate\Support\Str as LaravelStr;

final class Str
{
    public static function studly(string $value): string
    {
        return LaravelStr::studly($value);
    }

    public static function slug(string $value): string
    {
        return LaravelStr::slug($value);
    }

    public static function snake(string $value): string
    {
        return LaravelStr::snake($value);
    }
}
