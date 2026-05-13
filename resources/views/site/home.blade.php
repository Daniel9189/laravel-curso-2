@extends('site.layout')

@section('title', 'Home Page')

@section('conteudo')

@include('includes.mensagem', ['titulo' => 'Mensagem Importante'])

@component('components.sidebar')
    @slot('titulo')
        Let's go, Brasil!
    @endslot

    @slot('paragrafo')
        World Cup is coming!
    @endslot
    @endcomponent

@endsection