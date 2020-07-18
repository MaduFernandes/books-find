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
    }
</style>

@section('content')
<div class="container">
    <div class="table table-hover" id="table">
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col" id="col">ID</th>
                    <th scope="col" id="col">Livro</th>
                    <th scope="col" id="col">Autor</th>
                    <th scope="col" id="col">Ano</th>
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


