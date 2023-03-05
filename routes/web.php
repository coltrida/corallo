<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EsercizioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/clienti', [ClientController::class, 'clienti'])->name('clienti');
    Route::get('/inserisciCliente', [ClientController::class, 'inserisci'])->name('clienti.inserisci');
    Route::post('/ricercaCliente', [ClientController::class, 'ricerca'])->name('clienti.ricerca');

    Route::get('/esercizi', [EsercizioController::class, 'esercizi'])->name('esercizi');
    Route::get('/inserisciEsercizio', [EsercizioController::class, 'inserisci'])->name('esercizi.inserisci');
    Route::post('/inserisciEsercizio', [EsercizioController::class, 'salva'])->name('esercizi.salva');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
