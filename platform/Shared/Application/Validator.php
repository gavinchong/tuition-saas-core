<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

interface Validator
{
    public function validate(object $command): void;
}
