@extends('layouts.app')

<style>
    table {
        border-radius: 10px;
        margin-top: 10px;
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
    #btn-danger{
        font-weight: bold;
    }
    #voltar-btn {
        color: #fff;
        background-color: black;
        border-color: Black;
        text-align: center;
        border-radius: .25rem;
        padding: .375rem .75rem;
        font-weight: bold;
        text-decoration-line: none;
    }
    .scroll{
        position: relative;
        height: 800px;
        overflow: auto;
    }
</style>

@section('content')
<div class="container">
    <div class="table table-hover" id="table">
        <a href="/" type="btn" value="Cancelar" id="voltar-btn" onClick="history.go(-1)">Voltar</a>
        <div class="scroll">
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col" id="col">ID</th>
                        <th scope="col" id="col">Livro</th>
                        <th scope="col" id="col">Autor</th>
                        <th scope="col" id="col">Ano</th>
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
                                <a type="submit" id = "btn-a" class="btn" href="{{ route('book.edit', $list->id) }}">Editar</a>
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
</div>
@endsection


