<?php

namespace App\Listener;

use App\Events\serverAccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class recurrentListener
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
     * @param  serverAccessEvent  $event
     * @return void
     */
    public function handle(serverAccessEvent $event)
    {
        //
    }
}
