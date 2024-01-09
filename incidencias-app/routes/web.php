<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;

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

//Route::get('/incidencias', [IncidenciaController::class, 'index']);
Route::get('/incidencias/delete/{id}', [IncidenciaController::class, 'destroy']);

//Añade todas las rutas asociadas al recurso en el controlador
Route::resource('incidencias', IncidenciaController::class);

