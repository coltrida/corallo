<?php

namespace App\Http\Controllers;

use App\service\EserciziService;
use Illuminate\Http\Request;

class EsercizioController extends Controller
{
    public function esercizi(EserciziService $eserciziService)
    {
        $esercizi = $eserciziService->lista();
        return view('esercizi.index', compact('esercizi'));
    }

    public function inserisci()
    {
        return view('esercizi.inserisci');
    }
}
