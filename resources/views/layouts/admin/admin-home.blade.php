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
                    <div class="table" id="table">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col" id="col">ID</th>
                                <th scope="col" id="col">Livro</th>
                                <th scope="col" id="col">Autor</th>
                                <th scope="col" id="col">Ano</th>
                                <th scope="col" id="col"></th>
                                <th scope="col" id="col"></th>
                                <th scope="col" id="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $list)
                                <tr>
                                    <th scope="row">{{$list->id}}</th>
                                    <td>{{$list->nome}}</td>
                                    <td>{{$list->autor}}</td>
                                    <td>{{$list->ano_de_publicacao}}</td>
                                    <td>
                                        <a id = "btn-show" class="btn" href="{{ route('admin.show', $list->id) }}">Visualizar</a>
                                    </td>
                                    <td>
                                        <a id = "btn-a" class="btn" href="{{ route('admin.edit', $list->id) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.destroy', $list->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger" id="btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
