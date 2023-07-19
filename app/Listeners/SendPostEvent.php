<?php

namespace App\Listeners;

use App\Events\PostEvent;
use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPostEvent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostEvent $request): void
    {
        $users = User::all();
        foreach ($users as $user) {
            \Mail::to($user->email)->send(new UserMail($request));    
        }
        
    }
}
