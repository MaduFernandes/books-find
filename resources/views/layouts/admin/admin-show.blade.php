@extends('layouts.app')

<nav>
    <a href="#" class="logo">
        <img src="{{url('/logo/logo2.jpg')}}" id="logo" alt="logo">
    </a>

    <ul class="menu">
        <li><a href="{{ route('admin.create') }}">Cadastrar</a></li>
    </ul>

    <ul class="menu">
        <li><a>Olá {{Auth::user()->name}}</a></li>

        <li><a class="nav-link" id="nav-link" href="{{route('logout')}}">{{_('Sair')}}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
</nav>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="GET">
                        @csrf
                        <div class="form-group row">
                            <label class="form-label">Livro: </label>
                            <p>{{$book->nome}}</p>
                        </div>
                        <div class="form-group row">
                            <label class="form-label">Autor: </label>
                            <p>{{$book->autor}}</p>
                        </div>
                        <div class="form-group row">
                            <label class="form-label">Ano de Publicação: </label>
                            <p>{{$book->ano_de_publicacao}}</p>
                        </div>
                            <div class="row">
                                <a href="{{ URL::previous() }}" class="btn btn-danger" type="btn">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
