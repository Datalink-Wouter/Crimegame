<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use App\UserTimer;

class CreateTimersRelation
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
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->timers()->save(new UserTimer());
    }
}
