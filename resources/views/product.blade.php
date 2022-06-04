@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
    <p> Exibindo produto id: {{ $id }} </p>
    @endif
    @if($busca !='')
    <p>O usuário estpa buscando por {{$busca}}</p>
    @endif

@endsection