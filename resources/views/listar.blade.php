@extends('layouts.app')

<style>
    table {
        border-radius: 10px;
    }
</style>

@section('content')
<div class="container">
    <div class="table table-hover" id="table">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Livro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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

                            <form action="{{ route('book.destroy', $list->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>

                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


