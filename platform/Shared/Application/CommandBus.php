<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

interface CommandBus
{
    public function dispatch(object $command): mixed;
}
