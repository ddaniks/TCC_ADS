@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $requisito->title }}</h1>
    <p>{{ $requisito->description }}</p>
    <div class="mb-3">
        <h3>Documentos Relacionados</h3>
        <ul>
            @foreach($requisito->documents as $document)
                <li>{{ $document->name }}</li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('requisito.edit', $requisito->id) }}" class="btn btn-primary">Editar Requisito</a>
</div>
@endsection
