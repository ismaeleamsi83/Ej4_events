<?php

namespace App\Listener;

use App\Events\userAccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class warnUserListener
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
        $msg = 'Acabas de entrar en una zona restringida. Has sido bloqueado.';

        $_SESSION['error'] .= $msg; 
    }
}
