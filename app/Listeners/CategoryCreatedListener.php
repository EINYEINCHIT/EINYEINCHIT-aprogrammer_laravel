<?php

namespace App\Listeners;

use App\User;
use App\Mail\CategoryStored;
use App\Events\CategoryCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\CategoryStoredNotification;

class CategoryCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CategoryCreatedEvent  $event
     * @return void
     */
    public function handle(CategoryCreatedEvent $event)
    {
        $user = User::all();
        foreach($user as $user) {
            $user->notify(new CategoryStoredNotification());
        }
    }
}
