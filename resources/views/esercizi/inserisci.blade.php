@extends('layouts.admin')
@section('content')
    <form action="{{route('esercizi.salva')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" name="nome" class="form-control border-dark shadow" placeholder="Nome Esercizio" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" name="muscoli" class="form-control border-dark shadow" placeholder="Muscoli coinvolti" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" name="descrizione" class="form-control border-dark shadow" placeholder="Descrizione" aria-label="First name">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <input class="form-control border-dark shadow" name="file" type="file" id="formFile">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    inserisci
                </button>
            </div>
        </div>
    </form>

@endsection
