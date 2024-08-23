@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajuda e Suporte</h1>
    <h3>Perguntas Frequentes (FAQ)</h3>
    <ul>
        <!-- Adicione perguntas frequentes e respostas aqui -->
        <li>Como criar um checklist?</li>
        <li>Como gerar um relatório PDF?</li>
    </ul>
    <h3>Contato para Suporte</h3>
    <form method="POST" action="{{ route('support.submit') }}">
        @csrf
        <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea id="message" class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <h3>Documentação e Tutoriais</h3>
    <ul>
        <li><a href="#">Documentação</a></li>
        <li><a href="#">Tutoriais</a></li>
    </ul>
</div>
@endsection

