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
            $scheda->latest()->with(['settimanallenamento' => function($settimana){
                $settimana->with(['giorniallenamento' => function($giorno){
                    $giorno->with(['allenamenti' => function($allenamento){
                        $allenamento->with('esercizio');
                    }]);
                }]);
            }]);
        }])->find($idCliente);
    }

    public function salva($request)
    {
        User::create([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'annoNascita' => $request->annoNascita,
            'email' => $request->email,
            'role' => 'u',
            'password' => \Hash::make('123456'),
        ]);
    }

    public function modifica($request)
    {
        $user = User::find($request->idCliente);
        $user->update([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'email' => $request->email,
            'annoNascita' => $request->annoNascita,
        ]);
    }

    public function elimina($request)
    {
        User::find($request->idCliente)->delete();
    }
}
