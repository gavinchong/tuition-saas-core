<?php

declare(strict_types=1);

namespace App\Listeners;

use Modules\Shared\Domain\Events\UserCreated;

final class SendWelcomeEmail
{
    public function handle(UserCreated $event): void
    {
        logger()->info("Send welcome email to user: {$event->userId}");
    }
}
