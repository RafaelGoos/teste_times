<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//ROTAS API//

Route::post('/cliente', [App\Http\Controllers\ClienteController::class, 'store'])->name('.store');
Route::put('/cliente/{id}', [App\Http\Controllers\ClienteController::class, 'update'])->name('.update');
Route::delete('/cliente/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('.destroy');
Route::get('/cliente/{id}', [App\Http\Controllers\ClienteController::class, 'show'])->name('.show');
Route::get('/consulta/final-placa/{numero}', [App\Http\Controllers\ClienteController::class, 'consultaPorFinalPlaca'])->name('.consultaPorFinalPlaca');

