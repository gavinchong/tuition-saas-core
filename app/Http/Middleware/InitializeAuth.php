<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Platform\Auth\Context\AuthContext;

final class InitializeAuth
{
    public function handle($request, Closure $next)
    {
        // TEMP: fake user (replace with JWT later)
        AuthContext::set([
            'id' => 'user-1',
            'email' => 'demo@saas.com',
            'name' => 'Demo User',
        ]);

        return $next($request);
    }
}
