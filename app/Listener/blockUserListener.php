<?php

namespace App\Listener;

use App\Events\userAccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class blockUserListener
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
     * @param  userAccessEvent  $event
     * @return void
     */
    public function handle(userAccessEvent $event)
    {
        $_SESSION['access'] = false;
    }
}
