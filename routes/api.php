<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UbicacionesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//cometario

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('/eventos',EventoController::class);
Route::apiResource('/imagenes',ImagenController::class);
Route::apiResource('/ubicaciones',UbicacionesController::class);
Route::apiResource('/areas',AreaController::class);
Route::apiResource('/session',UserController::class);
Route::apiResource('/ticket',TicketController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
