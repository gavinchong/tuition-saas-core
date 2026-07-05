<?php

declare(strict_types=1);

namespace Platform\Shared\Domain;

abstract class ValueObject
{
    abstract public function equals(self $other): bool;
}
