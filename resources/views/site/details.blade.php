@extends('site.layout')

@section('title', 'Detalhes')

@section('conteudo')
    
<div class="row container">
    <div class="col s12 m6">
    <img src="{{$product->imagem}}" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h1>{{$product->nome}}</h1>
        <p>{{$product->descricao}}</p>
        <p>Postado por: {{$product->user->firstName}}</p>
        <p>Categoria: {{$product->categoria->nome}}</p>
        <button class="btn orange btn-large"> Comprar </button>
    </div>
</div>

@endsection