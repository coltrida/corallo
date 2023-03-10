@extends('layouts.admin')
@section('content')
    <form action="{{$cliente->id ? route('clienti.modifica') : route('clienti.salva')}}" method="post">
        @csrf
        @if($cliente->id)
            @method('PATCH')
            <input type="hidden" name="idCliente" value="{{$cliente->id}}">
        @endif
        <div class="row">
            <div class="col">
                <input type="text" name="nome" class="form-control border-dark shadow"
                       value="{{$cliente->nome}}" placeholder="Nome" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" name="cognome" class="form-control border-dark shadow"
                       value="{{$cliente->cognome}}" placeholder="Cognome" aria-label="Last name">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control border-dark shadow"
                       value="{{$cliente->email}}" placeholder="email" aria-label="Last name">
            </div>
            <div class="col">
                <input type="number" name="annoNascita" class="form-control border-dark shadow"
                       value="{{$cliente->annoNascita}}" placeholder="annoNascita" aria-label="Last name">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <button type="submit" class="btn btn-primary">{{$cliente->id ? 'Modifica' : 'Salva'}}</button>
                <a href="{{route('clienti')}}"  class="btn btn-warning">Annulla</a>
            </div>

        </div>
    </form>

@endsection
