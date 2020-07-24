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

    #btn {
        width: 49%;
        background-color: #0077b6;
        color: white;
        font-weight: bold;
    }
    .mx-auto{
        margin-top: 50px;
    }
    #cancelar-btn {
        width: 49%;
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
</style>
@section('content')
<div class="container">
    <div class="content">
        <div class="d-flex justify-content-cente">
            <div class="mx-auto">
                <div class="jumbotron vertical-center" id="panel">
                    <div class="container">
                        <h2 class="display-4" id="title">{{ __('Cadastrar Livro') }}</h2>
                        </div>
                    </div>
                <div class="content-first">
                    <div class="row no-gutters bg-light position-relative">
                        <div class="col-sm-6 mb-md-0 p-md-4">
                            <img src="{{ url('/undraw_Reading_book_re_kqpk.svg') }}" class="w-100" alt="...">
                        </div>
                        <div class="col-md-6 position-static p-4 pl-md-0" id="panel2">
                            <form method="POST" action="/">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <input class="form-control" name="nome" placeholder="Livro" class="@error('nome') is-invalid @enderror">
                                        
                                        @error('nome')
                                            <div class="alert alert-danger alert-dismissible fade show">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="autor" placeholder="Autor" class="@error('autor') is-invalid @enderror">
                                        
                                        @error('autor')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="ano_de_publicacao" placeholder="Ano de Publicação" class="@error('ano_de_publicacao') is-invalid @enderror">
                                        
                                        @error('ano_de_publicacao')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Salvar" id="btn" class="btn">
                                        <a href="{{ URL::previous() }}" id="cancelar-btn" type="btn">{{ __('Cancelar') }}</a>
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
