<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Illuminate\Contracts\Container\Container;
use Platform\Shared\Application\CommandBus;

final class SimpleCommandBus implements CommandBus
{
    public function __construct(
        private Container $container
    ) {}

    public function dispatch(object $command): mixed
    {
        $handlerClass = $this->resolveHandler($command);

        $handler = $this->container->make($handlerClass);

        $pipeline = $this->container->make(SimplePipeline::class);

        return $pipeline
            ->through([
                \Platform\Foundation\Pipes\ValidationPipe::class,
                \Platform\Foundation\Pipes\AuthorizationPipe::class,
            ])
            ->execute($command, fn ($command) => $handler->handle($command));
    }

    private function resolveHandler(object $command): string
    {
        return str_replace('Command', 'Handler', get_class($command));
    }
}
