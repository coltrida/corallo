<?php

use App\Http\Controllers\Api\EsercizioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/esercizi', [EsercizioController::class, 'index']);
