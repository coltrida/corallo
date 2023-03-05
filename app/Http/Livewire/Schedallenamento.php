<?php

namespace App\Http\Livewire;

use App\service\ClientiService;
use Illuminate\Support\Collection;
use Livewire\Component;

class Schedallenamento extends Component
{
    public $cliente;
    public $schede = [];
    public $settimane = [];

    public function mount($idCliente, ClientiService $clientiService)
    {
        $this->cliente = $clientiService->cliente($idCliente);
        $this->schede = $this->cliente->schedallenamento;
        $this->settimane = count($this->cliente->schedallenamento) > 0 ?
            $this->cliente->schedallenamento[0]->settimanallenamento : [];
    }

    public function selezionaScheda(\App\Models\Schedallenamento $scheda)
    {
        $this->settimane = $scheda->settimanallenamento;
    }

    public function render()
    {
        return view('livewire.schedallenamento');
    }
}
