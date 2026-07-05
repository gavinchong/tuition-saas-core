<?php

declare(strict_types=1);

namespace Platform\Foundation\Pipes;

use Platform\Shared\Application\Pipe;

final class AuthorizationPipe implements Pipe
{
    public function handle(object $payload, callable $next): mixed
    {
        // future: policy check per command/query

        return $next($payload);
    }
}
