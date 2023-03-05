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

    public function salva(Request $request, EserciziService $eserciziService)
    {
        $res = $eserciziService->salva($request);

        $message = $res ? "Esercizio creato con succeesso" : 'Esercizio non creato';
        session()->flash('message', $message);

        return redirect()->route('esercizi');
    }
}
