<?php

use Platform\Tenant\Context\TenantContext;

if (!function_exists('tenant')) {
    function tenant(): ?array
    {
        return TenantContext::get();
    }
}
