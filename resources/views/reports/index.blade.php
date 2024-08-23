@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Relatórios e Documentos</h1>
    <form method="POST" action="{{ route('report.generate') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Gerar Relatório PDF</button>
    </form>
    <div class="mt-4">
        <h3>Relatórios Gerados</h3>
        <ul>
            @foreach($reports as $report)
                <li><a href="{{ asset('storage/reports/'.$report->file) }}" download>{{ $report->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
