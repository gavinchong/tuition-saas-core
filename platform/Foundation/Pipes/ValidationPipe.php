<?php

declare(strict_types=1);

namespace Platform\Foundation\Pipes;

use Platform\Shared\Application\Pipe;
use Platform\Shared\Application\Validator;

final class ValidationPipe implements Pipe
{
    public function __construct(
        private ?Validator $validator = null
    ) {}

    public function handle(object $payload, callable $next): mixed
    {
        $class = class_basename($payload);

        $validatorClass = str_replace(
            'Command',
            'CommandValidator',
            $class
        );

        $validatorClass = str_replace(
            'Query',
            'QueryValidator',
            $validatorClass
        );

        $fullClass = str_replace(
            'Commands\\' . $class,
            'Validators\\' . $validatorClass,
            get_class($payload)
        );

        if (class_exists($fullClass)) {
            app($fullClass)->validate($payload);
        }

        return $next($payload);
    }
}
