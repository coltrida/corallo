<?php

namespace App\service;

use App\Models\Allenamento;
use App\Models\Giornoallenamento;
use App\Models\Schedallenamento;
use App\Models\Settimanallenamento;
use App\Models\User;
use Carbon\Carbon;

class SchedallenamentoService
{
    public function crea($request)
    {
        $scadenza = Carbon::make($request->dataInizio)->addWeeks($request->numeroSettimane);
        $scheda = Schedallenamento::create([
            'user_id' => $request->user_id,
            'scadenza' => $scadenza
        ]);

        for ($settimana = 1; $settimana <= $request->numeroSettimane; $settimana++){
            $settimanallenamento = Settimanallenamento::create([
                'schedallenamento_id' => $scheda->id,
                'numero' => $settimana
            ]);

            foreach ($request->giorniSelezionati as $giorno){
                $giorni[] = Giornoallenamento::create([
                    'settimanallenamento_id' => $settimanallenamento->id,
                    'giorno' => $giorno
                ]);
            }
        }

        return $giorni;
    }

    public function salva($request)
    {
        //dd($request);

        $giorniInteressati = $request->giorniSalvati->filter(function ($ele) use ($request) {
            return $ele['giorno'] == $request->giorno;
        })->values()->all();

        foreach ($giorniInteressati as $item){
            Allenamento::create([
                'giornoallenamento_id' => $item['id'],
                'esercizio_id' => $request->esercizio_id,
                'serie' => $request->serie,
                'ripetizioni' => $request->ripetizioni
            ]);
        }
//dd($giorniInteressati);
        return $giorniInteressati[0];
    }

    public function schedaGiorno($giorno)
    {
        return Giornoallenamento::with(['allenamenti' => function($q){
            $q->with('esercizio');
        }])->find($giorno)->allenamenti;
    }

    public function elimina($idAllenamento)
    {
        Allenamento::find($idAllenamento)->delete();
    }

    public function salvaPeso($request)
    {
        Allenamento::find($request->allenamentoId)->update([
            'peso' => $request->peso
        ]);
    }
}
