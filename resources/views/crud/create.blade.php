@extends('layouts.app')


@section('create')
<div class="card">
  <h5 class="card-header">Cadastre um livro</h5>
    <div class="card-body">
        <form method="POST" action="/admin" id="create">
            @csrf
            <div class="form-group row">
                <label for="Livro" class="col-md-4 col-form-label text-md-right">{{ __('Livro') }}</label>
                <div class="col-md-6">
                    <input id="nome" type="text" class="form-control" name="nome" required autocomplete="nome">
                </div>
            </div>

            <div class="form-group row">
                <label for="Autor" class="col-md-4 col-form-label text-md-right">{{ __('Autor') }}</label>
                <div class="col-md-6">
                    <input id="autor" type="text" class="form-control" name="autor" required autocomplete="autor">
                </div>
            </div>

            <div class="form-group row">
                <label for="Ano de Publicação" class="col-md-4 col-form-label text-md-right">{{ __('Ano de Publicação') }}</label>
                <div class="col-md-6">
                    <input id="ano" type="number" class="form-control" name="ano_de_publicacao" required autocomplete="ano_de_publicação">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6" id="buttons">
                     <input type="submit" class="btn btn-success">
                     <a href="{{ URL::previous() }}" class="btn btn-danger" type="btn">Cancelar</a>
                </div>
            </div>
        </form>
  </div>
</div>
@endsection
