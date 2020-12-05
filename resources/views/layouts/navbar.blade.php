<nav>
    @guest
    <a href="#" class="logo">
        <img src="{{url('/logo/logo2.jpg')}}" id="logo" alt="logo">
    </a>

    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Carrinho</a></li>
    </ul>

    <ul class="menu">
        <li><a href="{{ route('login') }}">{{_('Login')}}</a></li>
    </ul>
    @endguest

    @auth
    <ul class="menu">
        <li><a>Olá {{Auth::user()->name}}</a></li>

        <li><a class="nav-link" id="nav-link" href="{{route('logout')}}">{{_('Sair')}}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
    @endauth
</nav>
