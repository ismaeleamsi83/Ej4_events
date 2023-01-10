<?php

use App\Listener\accessLogListener;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accesoController;
use App\Http\Controllers\controlServidor;
use App\Events\serverAccessEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zonaRestringida', [accesoController::class, 'zonaRestringida']);

/*
Route::get('/controlServidor', function () {
    return view('controlServidor', ['name' => 'Control Servidor']);
});
*/
Route::get('/controladorServidor', [controlServidor::class, 'controlarServidor']);

Route::get('/controlServidor', function () {
    event(new serverAccessEvent("Im writing a log, access view controlServidor"));
    return view('controlServidor', ['name' => 'Control Servidor']);
});
