@extends('layouts.main')

@section('title', 'Welcome to the Jungle')

@section('content')

        <h1>Algum título</h1>
        @if(10 > 5)
            <p> A condição é true </p>

            <p>{{ $nome }}</p>
        @endif

        @if($nome =="Matheus")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }}</p> 
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for ( $i = 0; $i < count($arr); $i++ )
            @if($i == 2)
            <p> o indice é 2 </p>
            @endif
            <p> {{ $arr[$i] }} - {{ $i }} </p>
        @endfor

        @php
            $name = "João";
            echo $name;
        @endphp

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach
        
@endsection