@extends('layouts.admin')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                Clienti ({{$clients->total()}})
            </h1>
        </div>
        <div>
            <form class="d-flex" role="search" method="post" action="{{route('clienti.ricerca')}}" id="ricercaForm">
                @csrf
                <input class="form-control me-2 border-dark shadow" type="search" name="testo" id="testoRicerca"
                       placeholder="nome o cognome" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button> &nbsp;
                <button class="btn btn-outline-warning" type="reset" id="resetBtn">Reset</button>
            </form>
        </div>
        <div>
            <a class="btn btn-success" href="{{route('clienti.inserisciModifica')}}">Aggiungi</a>
        </div>
    </div>


    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">email</th>
            <th scope="col">Anno Nascita</th>
            <th scope="col">Registrato</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $item)
            <tr>
                <td style="vertical-align: middle">
                    <span class="position-relative">
                    @if($item->schedallenamento[0]->inScadenza)
                    <span title="scheda in scadenza" class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    @endif
                    {{$item->nome}}
                    </span>
                </td>
                <td style="vertical-align: middle">{{$item->cognome}}</td>
                <td style="vertical-align: middle">{{$item->email}}</td>
                <td style="vertical-align: middle">{{$item->annoNascita}}</td>
                <td style="vertical-align: middle">{{$item->logged ? 'YES' : 'NO'}}</td>
                <td style="vertical-align: middle">
                    <a class="btn btn-primary" href="{{route('schedAllenamento', $item->id)}}"
                       title="Schede: {{$item->schedallenamento_count}}">
                        <i class="fas fa-fw fa-book"></i>
                    </a>
                    <a class="btn btn-success" href="{{route('clienti.inserisciModifica', $item->id)}}"
                       title="Modifica">
                        <i class="fas fa-fw fa-pencil"></i>
                    </a>
                    <form action="{{route('clienti.elimina')}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="idCliente" value="{{$item->id}}">
                        <button title="elimina" class="btn btn-danger">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="6">{{$clients->links()}}</td>
        </tr>
        </tbody>
    </table>
@endsection

@extends('partial.resetRicerca')
