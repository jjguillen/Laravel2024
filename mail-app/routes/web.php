<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\EjemploMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function () {
   
    $pedido = new Pedido();
    $pedido->nombre = "Pedido de prueba Laravel";
    $pedido->precio = 119.95;
    
    // Enviar correo electrónico al usuario con el pedido
    $user = new User();
    $user->email = 'jjavierguillen@gmail.com';
    $user->name = 'javier';

    Mail::to($user)->send(new EjemploMail($pedido));

    return 'Mensaje enviado...';


});
