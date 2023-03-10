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
                Richieste
            </h1>
        </div>
        <div>
            <form class="d-flex" role="search" method="post" action="{{route('clienti.ricerca')}}" id="ricercaForm">
                @csrf
                <input class="form-control me-2 border-dark shadow" type="search" name="testo" id="testoRicerca"
                       placeholder="cerca" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button> &nbsp;
                <button class="btn btn-outline-warning" type="reset" id="resetBtn">Reset</button>
            </form>
        </div>
    </div>


    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Richiesta</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($richieste as $item)
            <tr>
                <td style="vertical-align: middle">{{$item->user->nome}}</td>
                <td style="vertical-align: middle">{{$item->user->cognome}}</td>
                <td style="vertical-align: middle">{{$item->testo}}</td>
                <td style="vertical-align: middle">

                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">{{$richieste->links()}}</td>
        </tr>
        </tbody>
    </table>
@endsection

@extends('partial.resetRicerca')
