@extends('layouts.app')

@section('title', 'Editar um Jogo')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Editar o jogo {{ $jogos->nome }}</h1>
        </div><!-- Col-sm-10 -->
        <div class="col-sm-2">
                <a href="{{ route('jogos-index')}}" class="btn btn-success">Lista de Jogos</a>
        </div><!-- Col-sm-2 -->
    </div><!-- Row -->
    <hr>
    <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label> 
                <input class="form-control" type="text" name="nome" value="{{ $jogos->nome }}" placeholder="Digita o nome do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="categoria">Categoria: </label> 
                <input class="form-control" type="text" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digita a categoria do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="ano_criado">Ano Criado: </label> 
                <input class="form-control" type="number" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digita o ano do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="valor">Valor: </label> 
                <input class="form-control" type="number" name="valor" value="{{ $jogos->valor }}" placeholder="Digita o valor do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <input class="btn btn-info" type="submit" name="submit" value="Atualizar Jogo">
            </div><!-- Form-Group -->
        </div><!-- Form-Group -->
    </form>
</div><!-- Container -->

@endsection