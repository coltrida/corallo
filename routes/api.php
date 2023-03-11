<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\EsercizioController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\RichiestaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/esercizi', [EsercizioController::class, 'index']);
Route::get('/esercizio/{idEsercizio}', [EsercizioController::class, 'dettagli']);
Route::get('/cliente/{idCliente}', [ClienteController::class, 'index']);
Route::get('/ultimaNews', [NewsController::class, 'ultima']);
Route::post('/richiesta', [RichiestaController::class, 'salva']);
