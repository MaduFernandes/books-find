@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <div class="content-first">
            <div class="card text-center">
                <div class="card-header">
                    Registre Aqui
                </div>
                <div class="card-body">
                    <form method="POST" action="/">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input class="form-control" type="nome_livro" name="nome" placeholder="Livro">
                            </div>
                            <div class="col">
                                <input class="form-control" type="nome_autor" name="autor" placeholder="Autor">
                            </div>
                            <div class="col">
                                <input class="form-control" type="ano_publicacao" name="ano_de_publicacao" placeholder="Ano de Publicação">
                            </div>
                            <input class="btn btn-primary"type="submit" value="Salvar">
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div> <!--div content-first-->
    </div><!--div content-->
</div><!--div container-->
@endsection
