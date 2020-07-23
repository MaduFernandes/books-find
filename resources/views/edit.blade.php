@extends('layouts.app')

<style>
    #panel{
        background-color: #0077b6;
        border-radius: 5px;
    }
    #title{
        color: white;
        margin: 0;
    }
    #panel2 {
        margin: auto;
    }
    #form{
        width: 85%;
    }
    #mx-auto{
        margin-top: 50px;
    }
    #cancelar-btn {
        width: 49%;
        float: right;
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        float:right;
        text-align: center;
        border-radius: .25rem;
        padding: .375rem .75rem;
        font-weight: bold;
        text-decoration-line: none;
    }
    #btn{
        width: 49%;
        font-weight: bold;
    }
</style>

@section('content')

<div class="container">
    <div class="content">
        <div class="d-flex justify-content-cente">
            <div class="mx-auto" id="mx-auto">
                <div class="jumbotron vertical-center" id="panel">
                    <div class="container">
                        <h2 class="display-4" id="title">Atualizar Livros</h2>
                        </div>
                    </div>
                <div class="content-first">
                    <div class="row no-gutters bg-light position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="{{ url('/undraw_Reading_book_re_kqpk.svg') }}" class="w-100" alt="...">
                        </div>
                        <div class="col-md-6 position-static p-4 pl-md-0" id="panel2">
                            <form method="POST" action={{ route('book.update', $book->getKey()) }}>
                                @csrf
                                @method('PUT')
                                <div class="form-group" id="form">
                                    <div class="form-group">
                                    <input class="form-control" type="nome_livro" name="nome" placeholder="Livro" value="{{$book->nome}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="nome_autor" name="autor" placeholder="Autor" value="{{$book->autor}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="ano_publicacao" name="ano_de_publicacao" placeholder="Ano de Publicação" value="{{$book->ano_de_publicacao}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary"type="submit" value="Atualizar" id="btn">
                                        <a href="{{ URL::previous() }}" id="cancelar-btn"  type="btn">Cancelar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
