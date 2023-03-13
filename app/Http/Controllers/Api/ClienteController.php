<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\service\ClientiService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index($idCliente, ClientiService $clientiService)
    {
        return $clientiService->cliente($idCliente);
    }

    public function aggiornaPassword(Request $request, ClientiService $clientiService)
    {
        return $clientiService->aggiornaPass($request);
    }
}
