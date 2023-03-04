@extends('layouts.admin')
@section('content')
    <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-success" href="{{route('clienti.inserisci')}}">Aggiungi</a>
        </div>
    </div>


    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">email</th>
            <th scope="col">Anno Nascita</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $item)
            <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->cognome}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->annoNascita}}</td>
                <td>

                </td>
            </tr>
        @endforeach
            <tr>
                <td colspan="5">{{$clients->links()}}</td>
            </tr>
        </tbody>
    </table>
@endsection
