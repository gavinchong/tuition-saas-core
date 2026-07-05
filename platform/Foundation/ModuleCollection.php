<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Countable;
use IteratorAggregate;
use ArrayIterator;

final class ModuleCollection implements IteratorAggregate, Countable
{
    private array $modules = [];

    public function add(AbstractModule $module): void
    {
        $this->modules[] = $module;
    }

    public function all(): array
    {
        return $this->modules;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->modules);
    }

    public function count(): int
    {
        return count($this->modules);
    }
}
