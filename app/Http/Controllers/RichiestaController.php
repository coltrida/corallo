<?php

namespace App\Http\Controllers;

use App\service\RichiesteService;
use Illuminate\Http\Request;

class RichiestaController extends Controller
{
    public function index(RichiesteService $richiesteService)
    {
        $richieste = $richiesteService->lista();
        return view('richieste.index', compact('richieste'));
    }
}
