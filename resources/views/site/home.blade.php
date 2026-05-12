@extends('site.layout')

@section('title', 'Home Page')

@section('conteudo')


{{-- isso é um comentário --}}

{{-- isset($nome) ? 'existe' : 'não existe' --}}

{{ $teste ?? 'padrão'}}
@endsection