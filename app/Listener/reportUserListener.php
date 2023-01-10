<?php

namespace App\Listener;

use App\Events\userAccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class reportUserListener
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
        // Simulamos enviar correo electronico
        $msg = ' Se ha reportado tu incidencia al administrador. ';

        $_SESSION['error'] .= $msg; 
    }
}
