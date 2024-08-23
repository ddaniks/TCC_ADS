@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerenciamento de Checklists</h1>
    <a href="{{ route('checklist.create') }}" class="btn btn-primary mb-3">Criar Novo Checklist</a>
    <div class="list-group">
        @foreach($checklists as $checklist)
            <a href="{{ route('checklist.details', $checklist->id) }}" class="list-group-item list-group-item-action">
                {{ $checklist->title }}
            </a>
        @endforeach
    </div>
</div>
@endsection
