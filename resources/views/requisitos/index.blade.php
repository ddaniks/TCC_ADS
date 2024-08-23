@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerenciamento de Requisitos</h1>
    <a href="{{ route('requisito.create') }}" class="btn btn-primary mb-3">Criar Novo Requisito</a>
    <div class="list-group">
        @foreach($requisitos as $requisito)
            <a href="{{ route('requisito.details', $requisito->id) }}" class="list-group-item list-group-item-action">
                {{ $requisito->title }}
            </a>
        @endforeach
    </div>
</div>
@endsection
