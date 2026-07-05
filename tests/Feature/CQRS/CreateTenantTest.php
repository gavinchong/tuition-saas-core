<?php

use Platform\Shared\Application\CommandBus;
use Modules\Tenant\Application\Commands\CreateTenantCommand;

it('creates tenant via command bus', function () {

    $bus = app(CommandBus::class);

    $result = $bus->dispatch(
        new CreateTenantCommand('Acme')
    );

    expect($result->isSuccess())->toBeTrue();
});
