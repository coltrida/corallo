<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\service\ClientiService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clienti(ClientiService $clientiService)
    {
        $clients = $clientiService->lista();
        return view('clienti.index', compact('clients'));
    }

    public function inserisciModifica(ClientiService $clientiService, $idCliente = null)
    {
        $cliente = $idCliente ? $clientiService->cliente($idCliente) : new User();
        return view('clienti.inserisci', compact('cliente'));
    }

    public function ricerca(Request $request, ClientiService $clientiService)
    {
        $clients = $clientiService->filtraCliente($request);
        return view('clienti.index', compact('clients'));
    }

    public function salva(Request $request, ClientiService $clientiService)
    {
        $clientiService->salva($request);
        return redirect()->route('clienti');
    }

    public function modifica(Request $request, ClientiService $clientiService)
    {
        $clientiService->modifica($request);
        return redirect()->route('clienti');
    }

    public function elimina(Request $request, ClientiService $clientiService)
    {
        $clientiService->elimina($request);
        return redirect()->route('clienti');
    }
}
