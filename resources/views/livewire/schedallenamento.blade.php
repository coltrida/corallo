<div class="row">
    <div class="col-10">
        <h4>{{$cliente->nome.' '.$cliente->cognome}}</h4>
        @foreach($settimane as $settimana)
            <h5>Settimana: {{$settimana->numero}}</h5>
            <div class="row">
                @foreach($settimana->giorniallenamento as $ele)
                    <div class="col">
                        <table class="table table-striped table-sm">
                            <thead class="table-dark">
                            <th scope="col">{{$ele->giorno}}</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Rip</th>
                            <th scope="col">Peso</th>
                            </thead>
                            <tbody>
                            @foreach($ele->allenamenti as $item)
                                <tr>
                                    <td>{{$item->esercizio->nome}}</td>
                                    <td>{{$item->serie}}</td>
                                    <td>{{$item->ripetizioni}}</td>
                                    <td>{{$item->peso}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>

        @endforeach
    </div>
    <div class="col-2">
        <h4>Schede
            <span>
                <a style="text-decoration: none" href="#" title="Aggiungi">
                            <i class="fas fa-fw fa-plus-circle" style="color: green"></i>
                </a>
            </span>
        </h4>
        @foreach($schede as $scheda)
            <button wire:click="selezionaScheda({{$scheda}})" class="btn btn-primary mb-3">{{$scheda->created_at->format('d-m-Y')}}</button>
        @endforeach
    </div>
</div>
