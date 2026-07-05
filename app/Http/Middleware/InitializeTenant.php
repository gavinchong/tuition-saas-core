<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Platform\Tenant\Resolver\TenantResolver;

final class InitializeTenant
{
    public function handle($request, Closure $next)
    {
        app(TenantResolver::class)->resolve();

        return $next($request);
    }
}
