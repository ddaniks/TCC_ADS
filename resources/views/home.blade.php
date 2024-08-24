<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Navbar -->
       <x-navbar />
   
    <!-- Menu Lateral -->
       <x-menu-lateral />   

    <!-- Conteúdo principal -->
    
    <div class="conteudo-principal">
        <x-conteudo :licitations="$licitations"/>
    </div>

</body>
</html>
