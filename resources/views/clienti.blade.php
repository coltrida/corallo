@extends('layouts.admin')

@section('content')
    <h2>Clienti ({{$clients->total()}})</h2>

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
                <td colspan="5">{{$clients}}</td>
            </tr>
        </tbody>
    </table>
@endsection
