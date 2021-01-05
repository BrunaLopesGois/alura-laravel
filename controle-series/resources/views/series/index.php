<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron mt-2">
            <h1 class="display-4">Séries</h1>
        </div>
        <a href="" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            <?php foreach ($series as $serie) : ?>
                <li class="list-group-item"><?= $serie; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>
