<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\service\SchedallenamentoService;
use Illuminate\Http\Request;

class SchedaController extends Controller
{
    public function salvaPeso(Request $request, SchedallenamentoService $schedallenamentoService)
    {
        $schedallenamentoService->salvaPeso($request);
    }
}
