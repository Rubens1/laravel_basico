@extends('layouts.app')

@section('title', 'Cadastra um Jogo')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Cadastra um novo jogo</h1>
        </div><!-- Col-sm-10 -->
            <div class="col-sm-2">
                    <a href="{{ route('jogos-index')}}" class="btn btn-success">Lista de Jogos</a>
            </div><!-- Col-sm-2 -->
        </div><!-- Row -->
    <hr>
    <form action="{{ route('jogos-store') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label> 
                <input class="form-control" type="text" name="nome" placeholder="Digita o nome do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="categoria">Categoria: </label> 
                <input class="form-control" type="text" name="categoria" placeholder="Digita a categoria do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="ano_criado">Ano Criado: </label> 
                <input class="form-control" type="number" name="ano_criacao" placeholder="Digita o ano do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <label for="valor">Valor: </label> 
                <input class="form-control" type="number" name="valor" placeholder="Digita o valor do jogo">
            </div><!-- Form-Group -->
            <div class="form-group mt-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Cadastra Jogo">
            </div><!-- Form-Group -->
        </div><!-- Form-Group -->
    </form>
</div><!-- Container -->

@endsection