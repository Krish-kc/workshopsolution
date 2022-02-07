<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\RegisterNewUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendNewUserNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
         $admins = User::whereHas('roles', function ($query) {
                $query->where('name', 'admin');
            })->get();

        Notification::send($admins, new RegisterNewUser($event->user));

        

    }
}
