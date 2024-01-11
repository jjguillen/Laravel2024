<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

//Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados/{empleado}', [EmpleadoController::class, 'update']);
Route::resource('/empleados', EmpleadoController::class);

/*
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return "ADMIN";
    });
    Route::get("/prueba/{id}", [EmpleadoController::class, 'prueba'])->where(['id' => '[0-9]+'])->name('miprueba');

});

Route::get("/miracomova/{id}", [EmpleadoController::class, 'prueba']);
*/



