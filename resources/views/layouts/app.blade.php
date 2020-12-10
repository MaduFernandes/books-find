<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <header>
        <nav class="navbar">
            <a class="navbar-brand" href="{{ route('book.index') }}">
                <img src="{{url('/img/book/logo.jpg')}}" id="logo" alt="logo">
            </a>
             <form class="form-inline">
                <p>Olá, Admin</p>
            </form>
        </nav>
    </header>

    <div class="body">
        <main class="main">
            <div id="app" class="container">
                <div class="modals">
                    <div class="row">
                        <div class="col">
                            @yield('index')
                            @yield('create')
                            @yield('edit')
                            @yield('show')
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    @include('layouts.footer')
</body>
</html>
