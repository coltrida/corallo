<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                Scheda per: {{$cliente->nome.' '.$cliente->cognome}}
            </h1>
        </div>

        <div>
            <a class="btn btn-success" href="{{route('schedAllenamento', $cliente->id)}}">Annulla</a>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <input type="number" id="nrSettimane" wire:model="nrSettimane" class="form-control border-dark shadow" aria-label="First name">
            <label for="nrSettimane" class="ml-2 text-gray-600">Nr. Settimane</label>
        </div>
        <div class="col-2">
            <select class="form-select border-dark shadow" aria-label="Default select example"
                    id="nrGiorniSettimana" wire:model="nrGiorniSettimana"
                    wire:change="selezionaNrGiorniSettimana($event.target.value)">
                <option selected></option>
                @for($i=1; $i<7; $i++)
                    <option>{{$i}}</option>
                @endfor
            </select>
            <label for="nrGiorniSettimana" class="ml-2 text-gray-600">Nr. Giorni a Settimana</label>
        </div>
        <div class="col-8">
            <div class="row">
                @for($j = 0; $j < $nrGiorniSettimana; $j++)
                    <div class="col">
                        <select class="form-select border-dark shadow" aria-label="Default select example"
                                wire:model="giorniSelezionati.{{ $j }}"
                                {{--wire:change="selezionaGiorno($event.target.value)"--}}>
                            <option selected></option>
                            @foreach($giorni as $item)
                                <option>{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                @endfor
                    {{--@dump($giorniSelezionati)--}}

                <div class="col">
                    <button class="btn btn-primary" wire:click="preCreazione()">Crea</button>
                </div>
            </div>
        </div>
    </div>

    @if($showCreaScheda)
        <div class="row mt-4">
            <div class="col">

                <h4>
                    @if($indiceGiorno != 0)
                    <span>
                        <button wire:click="indietro">
                            <i class="fas fa-fw fa-arrow-left" style="color: blue"></i>
                        </button>
                    </span>
                    @endif
                    {{$giorniSelezionati[$indiceGiorno]}}
                    @if($indiceGiorno != count($giorniSelezionati)-1)
                    <span>
                        <button wire:click="avanti">
                            <i class="fas fa-fw fa-arrow-right" style="color: blue"></i>
                        </button>
                    </span>
                    @endif
                </h4>
            </div>
            <div class="col">
                <select class="form-select border-dark shadow" aria-label="Default select example"
                        wire:model="esercizio_id">
                    <option selected></option>
                    @foreach($listaEsercizi as $item)
                        <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="number" wire:model="serie" placeholder="serie" class="form-control border-dark shadow" aria-label="First name">
            </div>
            <div class="col">
                <input type="number" wire:model="ripetizioni" placeholder="rip" class="form-control border-dark shadow" aria-label="First name">
            </div>
            <div class="col">
                <button class="btn btn-primary" wire:click="selezionaEsercizio">Aggiungi</button>
            </div>
        </div>

        <table class="table table-dark table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">Esercizio</th>
                <th scope="col">Serie</th>
                <th scope="col">Rip</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->schedagiorno as $ele)
                <tr>
                    <td>{{$ele->esercizio->nome}}</td>
                    <td>{{$ele->serie}}</td>
                    <td>{{$ele->ripetizioni}}</td>
                    <td>
                        <button wire:click="elimina({{$ele->id}})" class="btn btn-danger">
                            <i  class="fas fa-fw fa-trash" ></i>
                        </button>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif


</div>
