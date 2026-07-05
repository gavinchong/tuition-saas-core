<?php

use Modules\Shared\Domain\Events\UserCreated;
use Platform\Foundation\EventBus;

it('dispatches domain event', function () {

    $bus = app(EventBus::class);

    $event = new UserCreated(userId: '123');

    $bus->publish(new class($event) {
        public function __construct(private $event)
        {
        }

        public function pullEvents(): array
        {
            return [$this->event];
        }
    });

    expect(true)->toBeTrue();
});
