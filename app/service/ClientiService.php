<?php

namespace App\service;

use App\Models\User;

class ClientiService
{
    public function lista()
    {
        return User::clienti()
                ->withCount('schedallenamento')
                ->latest()
                ->paginate(10);
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

    public function cliente($idCliente)
    {
        return User::with(['schedallenamento' => function($scheda){
            $scheda->with(['settimanallenamento' => function($settimana){
                $settimana->with(['giorniallenamento' => function($giorno){
                    $giorno->with('allenamenti');
                }]);
            }]);
        }])->find($idCliente);
    }
}
