@extends('layouts.app')

<nav>
    <a href="{{ route('admin.index') }}" class="logo">
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
                    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{_('Livro')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" class="@error('codigo') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ _('Autor') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="autor" class="@error('produto') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ _('Ano de Publicação') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ano_de_publicacao" class="@error('fornecedor') is-invalid @enderror">
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
