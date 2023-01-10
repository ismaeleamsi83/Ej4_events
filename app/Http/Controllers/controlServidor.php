<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\serverAccessEvent;
use App\Http\Controllers\accessLogListener;

class controlServidor extends Controller
{
    //
    public function controlarServidor()
    {

        //event(new accessLogListener("Im writing a log"));
        return view('controlServidor', ['name' => 'Control Servidor']);
        //return view('controlServidor', event(new accessLogListener("I'm writing a log")));
        
    }
}
