@extends('layouts.admin')
@section('content')
    @livewire('schedallenamento', ['idCliente' => $idCliente])
@endsection

