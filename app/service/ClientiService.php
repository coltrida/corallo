<?php

namespace App\service;

use App\Models\User;

class ClientiService
{
    public function lista()
    {
        return User::clienti()->latest()->paginate(10);
    }

    public function filtraCliente($request)
    {
        $testo = $request->testo;
        return User::
            where(function($query) use($testo) {
                $query->where('nome', 'like', '%'.$testo.'%')
                    ->orWhere('cognome', 'like', '%'.$testo.'%');
            })
            ->paginate(10);
    }
}
