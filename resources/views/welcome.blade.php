<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Olá mundo!</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="banner">
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
    </body>
</html>
