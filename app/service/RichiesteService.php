<?php

namespace App\service;

use App\Events\InvioRichiestaEvent;
use App\Models\Richiesta;

class RichiesteService
{
    public function lista()
    {
        return Richiesta::with('user')->latest()->paginate(10);
    }

    public function salva($request)
    {
        Richiesta::create([
            'user_id' => $request->userId,
            'testo' => $request->testo
        ]);

        return 'Richiesta inviata';
    }
}
