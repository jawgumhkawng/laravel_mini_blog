<?php

namespace App\Listeners;

use App\Mail\PostStore;
use App\Events\PostCreateEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreateEventListener
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
    public function handle(PostCreateEvent $event): void
    {
        Mail::to('jaw@ gmail.com')->send(new PostStore($event->post));
    }
}
