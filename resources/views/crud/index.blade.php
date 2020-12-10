@extends('layouts.app')

@section('index')
<div class="card">
    <div class="card-header">
        <p class="list">Lista</p>

        <a class="btn btn-success" id="sucess" href="{{ route('book.create') }}">Cadastrar</a></li>
    </div>
    <div class="card-body">
        <form>
            <div class="row justify-content-md-between">
                <div class="col col-lg-7 col-xl-5 form group">
                    <div class="input-group" id="search">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="btn-search">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-hover table-listing">
            <thead>
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
                    <a id = "btn-show" class="btn btn-dark" href="{{ route('book.show', $list->id) }}">Visualizar</a>
                </td>
                <td>
                    <a id = "btn-a" class="btn btn-info" href="{{ route('book.edit', $list->id) }}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('book.destroy', $list->id) }}" method="POST">
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
@endsection
