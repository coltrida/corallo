<div>
    <div class="modal fade" id="confermaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ Session::get('message') }}
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">
                Esercizi ({{$listaEsercizi->total()}})
            </h1>
        </div>

        <div>
            <a class="btn btn-success" href="{{route('esercizi.inserisci')}}">Aggiungi</a>
        </div>
    </div>

    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
            <th scope="col">Muscoli</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listaEsercizi as $item)
            <tr>
                <td style="vertical-align: middle">{{$item->nome}}</td>
                <td style="vertical-align: middle">
                    @if(isset($item->linkFoto))
                        <img width="100px" src="{{asset("storage/$item->linkFoto")}}" alt="foto">
                    @endif
                </td>
                <td style="vertical-align: middle">{{$item->muscoli}}</td>
                <td style="vertical-align: middle">{{$item->descrizione}}</td>
                <td style="vertical-align: middle">
                    <button wire:click="eliminaEsercizio({{$item->id}})" type="button" class="btn btn-danger">
                        <i  class="fas fa-fw fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">{{$listaEsercizi->links()}}</td>
        </tr>
        </tbody>
    </table>
</div>
