<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
        <a class="navbar-brand" href="{{ route('listar_series') }}">Home</a>
        @auth
        <a href="/sair" class="text-danger">Sair</a>
        @endauth
        @guest
        <a href="/entrar">Entrar</a>
        @endguest
    </nav>

    <div class="container">
        <div class="jumbotron mt-2">
            <h1>@yield('cabecalho')</h1>
        </div>

        @yield('conteudo')
    </div>
</body>

</html>