@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="mt-4">
        <h3>Checklists Recentes</h3>
        <ul>
            @foreach($checklists as $checklist)
                <li><a href="{{ route('checklist.details', $checklist->id) }}">{{ $checklist->title }}</a></li>
            @endforeach
        </ul>
        <a href="{{ route('checklist.create') }}" class="btn btn-primary">Criar Novo Checklist</a>
    </div>
</div>
@endsection
