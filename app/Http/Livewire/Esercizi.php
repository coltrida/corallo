<?php

namespace App\Http\Livewire;

use App\Models\Esercizio;
use App\service\EserciziService;
use Livewire\Component;
use Livewire\WithPagination;

class Esercizi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {

    }

    public function eliminaEsercizio($id, EserciziService $eserciziService)
    {
        $eserciziService->elimina($id);
    }

    public function render(EserciziService $eserciziService)
    {
        return view('livewire.esercizi', [
            'listaEsercizi' => $eserciziService->lista()
        ]);
    }

}
