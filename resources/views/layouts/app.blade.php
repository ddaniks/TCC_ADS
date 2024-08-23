<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Aplicativo</title>
    <!-- Adicione links para CSS aqui -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <!-- Adicione seu cabeçalho aqui -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Adicione seu rodapé aqui -->
    </footer>

    <!-- Adicione scripts JavaScript aqui -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
