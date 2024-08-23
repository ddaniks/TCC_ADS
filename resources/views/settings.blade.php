@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Configurações</h1>
    <form method="POST" action="{{ route('settings.update') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
    <form method="POST" action="{{ route('logout') }}" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger">Sair</button>
    </form>
</div>
@endsection
