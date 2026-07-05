<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

interface Pipe
{
    public function handle(object $payload, callable $next): mixed;
}
