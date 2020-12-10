<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>

<body>
    <div class="content">

    @include('layouts.navbar')

    <section id="main">
    <h1>Livros</h1>
    @foreach ($book as $list)
        <div class="card-group">
            <div class="card">
                <img class="img" src="{{ url('/img/casmurro.jpg')}}" alt="{$list->nome}}">
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
    @include('layouts.footer')
</body>
</html>
