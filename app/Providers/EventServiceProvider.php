<?php

namespace App\Providers;

use App\Events\ReceipeCreatedEvent;
use App\Events\CategoryCreatedEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\ReceipeCreatedListener;
use App\Listeners\CategoryCreatedListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ReceipeCreatedEvent::class => [
            ReceipeCreatedListener::class,
        ],
        CategoryCreatedEvent::class => [
            CategoryCreatedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
