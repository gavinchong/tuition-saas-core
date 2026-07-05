<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Platform\Shared\Application\Pipeline;

final class SimplePipeline implements Pipeline
{
    private array $pipes = [];

    public function through(array $pipes): self
    {
        $this->pipes = $pipes;

        return $this;
    }

    public function execute(object $payload, callable $destination): mixed
    {
        $pipeline = array_reduce(
            array_reverse($this->pipes),
            function ($next, $pipe) {
                return function ($payload) use ($next, $pipe) {
                    return app($pipe)->handle($payload, $next);
                };
            },
            $destination
        );

        return $pipeline($payload);
    }
}
