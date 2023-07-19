<?php

namespace App\Listeners;

use App\Events\PostEvent;
use App\Mail\UserMail;
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
        \Mail::to('bokhtiartoshar1@gmail.com')->send( new UserMail($request));
    }
}
