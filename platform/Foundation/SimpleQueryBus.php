<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Illuminate\Contracts\Container\Container;
use Platform\Shared\Application\QueryBus;

final class SimpleQueryBus implements QueryBus
{
    public function __construct(
        private Container $container
    ) {}

    public function ask(object $query): mixed
    {
        $handlerClass = $this->resolveHandler($query);

        $handler = $this->container->make($handlerClass);

        return $handler->handle($query);
    }

    private function resolveHandler(object $query): string
    {
        return str_replace(
            'Query',
            'Handler',
            get_class($query)
        );
    }
}
