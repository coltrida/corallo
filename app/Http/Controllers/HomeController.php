<?php

namespace App\Http\Controllers;

use App\service\ClientiService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function clienti(ClientiService $clientiService)
    {
        $clients = $clientiService->lista();
        return view('clienti', compact('clients'));
    }
}
