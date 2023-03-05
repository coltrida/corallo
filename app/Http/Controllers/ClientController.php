<?php

namespace App\Http\Controllers;

use App\service\ClientiService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clienti(ClientiService $clientiService)
    {
        $clients = $clientiService->lista();
        return view('clienti.index', compact('clients'));
    }

    public function inserisci()
    {
        return view('clienti.inserisci');
    }

    public function ricerca(Request $request, ClientiService $clientiService)
    {
        $clients = $clientiService->filtraCliente($request);
        return view('clienti.index', compact('clients'));
    }
}
