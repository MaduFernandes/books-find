@extends('layouts.app')


@section('show')
<div class="card">
  <h5 class="card-header">{{$book->nome}}</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('book.update', $book->getKey()) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="Livro" class="col-md-4 col-form-label text-md-right">{{ __('Livro: ') }}</label>
                <div class="col-md-6">
                    <p class="show">{{$book->nome}}</p>
                </div>
            </div>

            <div class="form-group row">
                <label for="Autor" class="col-md-4 col-form-label text-md-right">{{ __('Autor:') }}</label>
                <div class="col-md-6">
                    <p class="show">{{$book->autor}}</p>
                </div>
            </div>

            <div class="form-group row">
                <label for="Ano de Publicação" class="col-md-4 col-form-label text-md-right">{{ __('Ano: ') }}</label>
                <div class="col-md-6">
                    <p class="show">{{$book->ano_de_publicacao}}</p>
            </div>
            <div class="col-md-6">
                <a href="{{ URL::previous() }}" class="btn btn-warning" type="btn">{{ __('Voltar') }}</a>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection
