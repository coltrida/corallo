<?php

namespace App\Http\Controllers;

use App\service\ClientiService;
use Illuminate\Http\Request;

class SchedallenamentoController extends Controller
{
    public function schedAllenamento($idCliente)
    {
        return view('schedeAllenamento.index', compact('idCliente'));
    }
}
