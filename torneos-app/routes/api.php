<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use Illuminate\Support\Facades\Auth;

use App\Http\Resources\JuegoResource;
use App\Models\Juego;
use App\Http\Controllers\TorneoAPIController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//RUTA CREACIÓN DE TOKEN: 
Route::post('/tokens/create', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    return response()->json([
        'token' => $request->user()->createToken($request->email, ['*'], now()->addWeek())->plainTextToken,
        'message' => 'Success'
    ]);
});


//RUTAS API
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/juegos', function () {
        return JuegoResource::collection(Juego::all());
    });

    Route::get('/juegos/{id}', function (string $id) {
        return new JuegoResource(Juego::findOrFail($id));
    });

    Route::delete('/juegos/{id}', function (string $id) {
        if (Juego::findOrFail($id)) {
            Juego::destroy($id);
            return ['message' => 'Juego deleted'];
        }
    });

    Route::post('/juegos', function (Request $request) {
        $juego = new Juego;
        $juego->nombre = $request->nombre;
        $juego->plataforma = $request->plataforma;
        $juego->edadR = $request->edadR;
        $juego->nota = $request->nota;
        $juego->save();
        return [
            'message' => 'Juego created',
            'juego' => $juego
        ];
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('torneos', TorneoAPIController::class);
});
