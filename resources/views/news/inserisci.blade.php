@extends('layouts.admin')
@section('content')
    <form action="{{$news->id ? route('news.modifica') : route('news.salva')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if($news->id)
            @method('PATCH')
            <input type="hidden" name="idNews" value="{{$news->id}}">
        @endif
        <div class="row">
            <div class="col">
                <input type="text" name="titolo" class="form-control border-dark shadow"
                       value="{{$news->titolo}}" placeholder="Titolo" aria-label="First name">
            </div>

            <div class="col">
                <input type="file" name="file" class="form-control border-dark shadow"
                        placeholder="foto" aria-label="Last name">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <input type="text" name="testo" class="form-control border-dark shadow"
                       value="{{$news->testo}}" placeholder="testo" aria-label="Last name">
            </div>

        </div>

        <div class="row mt-5">
            <div class="col">
                <button type="submit" class="btn btn-primary">{{$news->id ? 'Modifica' : 'Salva'}}</button>
                <a href="{{route('news')}}"  class="btn btn-warning">Annulla</a>
            </div>

        </div>
    </form>

@endsection
