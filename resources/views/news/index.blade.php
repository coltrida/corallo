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
                News ({{$news->total()}})
            </h1>
        </div>
        <div>
            <a class="btn btn-success" href="{{route('news.inserisciModifica')}}">Aggiungi</a>
        </div>
    </div>


    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo</th>
            <th scope="col">Foto</th>
            {{--<th scope="col">Azioni</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr>
                <td style="vertical-align: middle">{{$item->created_at->format('d-m-Y')}}</td>
                <td style="vertical-align: middle">{{$item->titolo}}</td>
                <td style="vertical-align: middle">{{$item->testo}}</td>
                <td style="vertical-align: middle">@if(isset($item->linkFoto))<img width="100px" src="{{asset("storage/$item->linkFoto")}}" alt="foto">@endif</td>
                {{--<td style="vertical-align: middle">
                    <a class="btn btn-success" href="{{route('news.inserisciModifica', $item->id)}}"
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
                </td>--}}
            </tr>
        @endforeach
        <tr>
            <td colspan="5">{{$news->links()}}</td>
        </tr>
        </tbody>
    </table>
@endsection

@extends('partial.resetRicerca')
