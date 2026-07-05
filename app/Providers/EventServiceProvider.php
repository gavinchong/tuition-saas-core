<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\SendWelcomeEmail;
use Modules\Shared\Domain\Events\UserCreated;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserCreated::class => [
            SendWelcomeEmail::class,
        ],
    ];
}
