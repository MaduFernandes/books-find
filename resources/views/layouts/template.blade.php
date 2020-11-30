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
    <div class="content">
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
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>

    <section id="main">
        <h1>Livros</h1>
        @foreach ($book as $list)
            <div class="card-group">
                <div class="card">
                    <img class="img" src="{{ url('/livros/livro1.jpeg')}}" alt="{$list->nome}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$list->nome}}</h5>
                    <p class="card-text">{{$list->autor}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
    </section>

    <div class="content">
        <div class="col-md-6 position-static p-4 pl-md-0">
            <form method="POST" action="{{ route('book.search') }}">
                @csrf

                    <div class="form-group">
                        <input class="form" name="search" placeholder="Livro" class="@error('nome') is-invalid @enderror">
                    </div>

                    <div class="form col">
                        <input type="submit" value="Buscar" id="btn" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>

        <footer class="page-footer font-small special-color-dark pt-4">
        <div class="container">
            <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
                </a>
            </li>
            </ul>
        </div>
        <div class="footer-copyright text-center py-3" id="copyright">© 2020 Copyright:
            <a href="https://https://www.unidesc.edu.br/"> Unidesc.edu.br</a>
        </div>
        </footer>
    </div>
</body>
</html>
