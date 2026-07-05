<?php

declare(strict_types=1);

namespace Platform\Foundation;

class Module
{
    public function __construct(
        public string $name,
        public string $path,
        public array $manifest
    ) {}

    public function provider(): string
    {
        return $this->manifest['provider'];
    }

    public function enabled(): bool
    {
        return $this->manifest['enabled'] ?? true;
    }
}
