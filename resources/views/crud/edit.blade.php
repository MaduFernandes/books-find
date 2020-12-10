@extends('layouts.app')


@section('edit')
<div class="card">
    <div class="card-header">
        <p>Editar</p>
    </div>
    <div class="card-body">
        <div class="form">
            <div class="row no-gutters position-relative">
                <form method="POST" action="{{ route('book.update', $book->getKey()) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="Livro" class="col-md-4 col-form-label text-md-right">{{ __('Livro ') }}</label>

                        <div class="col-md-6">
                            <input id="nome" type="text" class="form-control" name="nome" required autocomplete="nome" value="{{$book->nome}}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Autor" class="col-md-4 col-form-label text-md-right">{{ __('Autor') }}</label>

                        <div class="col-md-6">
                            <input id="autor" type="text" class="form-control" name="autor" required autocomplete="autor" value="{{$book->autor}}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Ano de Publicação" class="col-md-4 col-form-label text-md-right">{{ __('Ano de Publicação ') }}</label>

                        <div class="col-md-6">
                            <input id="ano" type="number" class="form-control" name="ano_de_publicacao" required autocomplete="ano_de_publicação" value="{{$book->ano_de_publicacao}}">
                        </div>

                        <div class="col-md-6" id="btn-edit">
                            <input type="submit" value="Salvar" id="btn" class="btn btn-success">
                            <a href="{{ URL::previous() }}" class="btn btn-danger" type="btn">{{ __('Cancelar') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
