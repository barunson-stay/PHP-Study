<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UsersEventListener
{
    public function handle(Login $event)
    {
        $event->users->last_login = \Carbon\Carbon::now();

        return $event->user->save();
    }
}
