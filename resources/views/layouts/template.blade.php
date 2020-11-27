<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Books Find') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="#" class="logo">
            <img src="{{url('/logo/logo2.jpg')}}" id="logo" alt="logo">
        </a>

        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Romance</a></li>
            <li><a href="#">Terror</a></li>
            <li><a href="#">Ficção Cientifica</a></li>
        </ul>

        <div class="search">
            <input type="text" placeholder="Buscar">
            <i class="fas fa-search"></i>
        </div>

        <ul class="menu">
            <li><a href="#">Entrar</a></li>
        </ul>
    </nav>

        <section id="main">
            <h1>Livros</h1>

            <div class="show-box">
                <a href="#">
                    <img src="{{ url('/livros/livro1.jpeg')}}">
                </a>
            </div>

            <br>

            <div class="content">
                <div class="col-md-6 position-static p-4 pl-md-0">
                    <form method="POST" action="/">
                        @csrf
                            <div class="form-group">
                                <input class="form" name="nome" placeholder="Livro" class="@error('nome') is-invalid @enderror">

                            </div>
                            <div class="form-group">
                                <input class="form" name="autor" placeholder="Autor" class="@error('autor') is-invalid @enderror">

                            </div>
                            <div class="form-group">
                                <input class="form" name="ano_de_publicacao" placeholder="Ano de Publicação" class="@error('ano_de_publicacao') is-invalid @enderror">

                            </div>
                                <input type="submit" value="Salvar" id="btn" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </section>
</body>
</html>
