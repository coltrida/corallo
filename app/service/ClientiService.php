<?php

namespace App\service;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            'logged' => false,
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

    public function aggiornaPass($request)
    {
        $cliente = User::where('email', $request->email)->firstOrFail();
        if (!$cliente){
            return 0;
        }

        if ($request->password != $request->confermaPassword){
            return -1;
        }

        $cliente->update([
            'logged' => true,
            'email_verified_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'password' => \Hash::make($request->password)
        ]);
        return $cliente->id;
    }
}
