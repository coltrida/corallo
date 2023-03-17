<?php

namespace App\Http\Livewire;

use App\service\ClientiService;
use App\service\EserciziService;
use App\service\SchedallenamentoService;
use Livewire\Component;

class Inseriscischedallenamento extends Component
{
    public $cliente;
    public $dataInizio;
    public $nrSettimane = 0;
    public $nrGiorniSettimana = 0;
    public $serie;
    public $esercizio_id;
    public $ripetizioni;
    public $duration;
    public $rest;
    public $giorni = ['lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato'];
    public $giorniSelezionati = [];
    public $giorniSalvati = [];
    public $listaEsercizi = [];
    public $showCreaScheda = false;
    public $indiceGiorno = 0;
    public $giornoInteressato = [];

    protected $listeners = ['selezionaEsercizio'];

    public function mount($idCliente, ClientiService $clientiService, EserciziService $eserciziService)
    {
        $this->cliente = $clientiService->cliente($idCliente);
        $this->listaEsercizi = $eserciziService->listaNonPaginate();
    }

    public function selezionaNrGiorniSettimana($nrGiorniSett)
    {
        $this->nrGiorniSettimana = $nrGiorniSett;
    }

    public function preCreazione(SchedallenamentoService $schedallenamentoService)
    {
        $this->showCreaScheda = true;

        $request = new \Illuminate\Http\Request();
        $request->merge([
            'giorniSelezionati' => $this->giorniSelezionati,
            'dataInizio' => $this->dataInizio,
            'user_id' => $this->cliente->id,
            'numeroSettimane' => $this->nrSettimane,
        ]);
        $this->giorniSalvati = $schedallenamentoService->crea($request);
    }

    public function selezionaEsercizio(SchedallenamentoService $schedallenamentoService)
    {
        $request = new \Illuminate\Http\Request();
        $request->merge([
            'giorniSalvati' => collect($this->giorniSalvati),
            'giorno' => $this->giorniSelezionati[$this->indiceGiorno],
            'esercizio_id' => $this->esercizio_id,
            'serie' => $this->serie,
            'ripetizioni' => $this->ripetizioni,
            'duration' => $this->duration,
            'rest' => $this->rest,
        ]);

        $this->giornoInteressato = $schedallenamentoService->salva($request);
        $this->serie = 0;
        $this->ripetizioni = 0;
        $this->esercizio_id = null;
        //dd($this->giornoInteressato['id']);
    }

    public function avanti()
    {
        $this->indiceGiorno++;
        //dd($this->giorniSalvati);
        $this->giornoInteressato = array_values( array_filter($this->giorniSalvati, function ($ele){
            return $ele['giorno'] == $this->giorniSelezionati[$this->indiceGiorno];
        }))[0];
        //dd($this->giornoInteressato);
    }

    public function indietro()
    {
        $this->indiceGiorno--;
        $this->giornoInteressato = array_values( array_filter($this->giorniSalvati, function ($ele){
            return $ele['giorno'] == $this->giorniSelezionati[$this->indiceGiorno];
        }))[0];
    }

    public function elimina($idAllenamento, SchedallenamentoService $schedallenamentoService)
    {
        $schedallenamentoService->elimina($idAllenamento);
    }

    public function getSchedagiornoProperty(SchedallenamentoService $schedallenamentoService)
    {
        return count($this->giornoInteressato) > 1 ?
            $schedallenamentoService->schedaGiorno($this->giornoInteressato['id']) : [];
    }

    public function render()
    {
        return view('livewire.inseriscischedallenamento');
    }
}
