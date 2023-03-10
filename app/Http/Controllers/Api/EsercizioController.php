<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\service\EserciziService;
use Illuminate\Http\Request;

class EsercizioController extends Controller
{
    public function index(EserciziService $eserciziService)
    {
        return $eserciziService->listaNonPaginate();
    }

    public function dettagli($idEsercizio, EserciziService $eserciziService)
    {
        return $eserciziService->dettagli($idEsercizio);
    }
}
