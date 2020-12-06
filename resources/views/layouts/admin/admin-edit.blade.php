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
                    <form method="POST" action={{ route('admin.update', $book->getKey()) }}>
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{_('Livro')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" placeholder="Livro" value="{{$book->nome}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ _('Autor') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="autor" placeholder="Autor" value="{{$book->autor}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ _('Ano de Publicação') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ano_de_publicacao" placeholder="Ano de Publicação" value="{{$book->ano_de_publicacao}}">
                            </div>
                        </div>

                        <div class="form-group col" style="margin-left: 385px">
                            <input type="submit" class="btn btn-success">

                            <a href="{{ URL::previous() }}" class="btn btn-danger" type="btn">Cancelar</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

