<?php

declare(strict_types=1);

namespace Platform\Shared\Application;

final class Result
{
    public function __construct(
        public readonly bool $success,
        public readonly mixed $data = null,
        public readonly ?string $error = null
    ) {}

    public static function ok(mixed $data = null): self
    {
        return new self(true, $data);
    }

    public static function fail(string $error): self
    {
        return new self(false, null, $error);
    }
}
