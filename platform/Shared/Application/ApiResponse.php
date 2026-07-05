<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

final class ApiResponse
{
    public static function success(mixed $data = null, ?string $message = null): array
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message,
        ];
    }

    public static function error(string $message, string $type = 'Error'): array
    {
        return [
            'success' => false,
            'error' => [
                'message' => $message,
                'type' => $type,
            ],
        ];
    }
}
