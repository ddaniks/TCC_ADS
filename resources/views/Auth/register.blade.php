@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registro de Usuário</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name" type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <a href="{{ route('login') }}">Já tem uma conta? Faça login.</a>
</div>
@endsection
