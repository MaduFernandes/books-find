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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

    @include('layouts.navbar')

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
        <div class="col-md-6 p-4 pl-md-0" id="search">
            <form method="POST" action="{{ route('book.search') }}">
                @csrf

                    <div class="form-group">
                        <input class="form" name="search" placeholder="Buscar:">
                    </div>

                    <div class="form col">
                        <input type="submit" value="Pesquisar" id="btn" class="btn">
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
