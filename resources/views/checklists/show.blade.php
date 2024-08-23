@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $checklist->title }}</h1>
    <div class="mb-3">
        <h3>Itens do Checklist</h3>
        <ul>
            @foreach($checklist->items as $item)
                <li>{{ $item->name }} - Status: {{ $item->status ? 'Cumprido' : 'Pendente' }}</li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('checklist.edit', $checklist->id) }}" class="btn btn-primary">Editar Checklist</a>
</div>
@endsection
