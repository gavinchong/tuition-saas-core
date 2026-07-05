<?php

use InvalidArgumentException;

it('validates tenant command', function () {

    $bus = app(\Platform\Shared\Application\CommandBus::class);

    expect(fn () =>
        $bus->dispatch(new \Modules\Tenant\Application\Commands\CreateTenantCommand(''))
    )->toThrow(InvalidArgumentException::class);
});
