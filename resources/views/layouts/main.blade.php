<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- FONTE DO GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 
        <!-- CSS BOOTSTRAP-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- CSS DA APLICAÇÃO -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/logo.svg" alt="" id="logo"></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a></li>
                        <li class="nav-item">    
                            <a href="/events/create" class="nav-link">Criar Eventos</a></li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a> </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="banner">
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2020</p>           
        </footer>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
