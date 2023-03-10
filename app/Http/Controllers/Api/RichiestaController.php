<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\service\RichiesteService;
use Illuminate\Http\Request;

class RichiestaController extends Controller
{
    public function salva(Request $request, RichiesteService $richiesteService)
    {
        return $richiesteService->salva($request);
    }
}
