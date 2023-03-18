<div class="row">
    <div class="col-10">
        <h4 class="mb-3">{{$cliente->nome.' '.$cliente->cognome}}</h4>
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
                            <th scope="col">Time</th>
                            <th scope="col">Rest</th>
                            </thead>
                            <tbody>
                            @foreach($ele->allenamenti as $item)
                                <tr>
                                    <td>{{$item->esercizio->nome}}</td>
                                    <td>{{$item->serie}}</td>
                                    <td>{{$item->ripetizioni}}</td>
                                    <td @if($item->created_at != $item->updated_at) style="background: #fffb7f" @endif>{{$item->peso}}</td>
                                    <td>{{\Carbon\Carbon::make($item->duration)->format('m:i')}}</td>
                                    <td>{{\Carbon\Carbon::make($item->rest)->format('m:i')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>

        @endforeach
    </div>
    <div class="col">
        <h4>Schede
            <span>
                <a style="text-decoration: none" href="{{route('schedAllenamento.inserisci', $cliente->id)}}" title="Aggiungi">
                            <i class="fas fa-fw fa-plus-circle" style="color: green"></i>
                </a>
            </span>
        </h4>
        @foreach($schede as $scheda)
            <button wire:click="selezionaScheda({{$scheda}})" class="btn btn-primary">
                {{$scheda->created_at->format('d-m-Y')}}
            </button>
            <div style="margin: 0 0 5px 0; padding: 0; font-size: 12px">
                scadenza: {{$scheda->scadenza}}
            </div>
            {{--<button class="btn btn-warning">
                <i class="fas fa-fw fa-pencil"></i>
            </button>--}}
        @endforeach
    </div>
</div>
