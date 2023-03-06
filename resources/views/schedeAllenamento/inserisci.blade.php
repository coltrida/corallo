@extends('layouts.admin')
@section('content')
    @livewire('inseriscischedallenamento', ['idCliente' => $idCliente])
@endsection

