<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

interface Pipeline
{
    public function through(array $pipes): self;

    public function execute(object $payload, callable $destination): mixed;
}
