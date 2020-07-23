@extends('layouts.app')

<style>
    table {
        border-radius: 10px;
    }
    #col{
        color: #fff;
        background-color: #0077b6;
        border-color: #0077b6;
    }
    #btn-a{
        color: #fff;
        background-color: #ffc107;
        border-color: #ffc107;
        float:right;
        font-weight: bold;
    }
    #btn-show{
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
        float:right;
        font-weight: bold;
    }
    #btn-danger{
        font-weight: bold;
    }

    #cadastrar{
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
        font-weight: bold;
        text-align: center;
        padding: 6px 12px;
        border-radius: 5px;
        float: right;
        margin-bottom: 10px;
    }

</style>

@section('content')
<div class="container">
    <a  href="{{ route('book.create') }}" type="btn" id="cadastrar">Novo</a>
        <div class="table table-hover" id="table">
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
                                <a id = "btn-show" class="btn" href="{{ route('book.show', $list->id) }}">Visualizar</a>
                            </td>
                            <td>
                                <a id = "btn-a" class="btn" href="{{ route('book.edit', $list->id) }}">Editar</a>
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


