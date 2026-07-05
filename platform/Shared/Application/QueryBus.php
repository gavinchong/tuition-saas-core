<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

interface QueryBus
{
    public function ask(object $query): mixed;
}
