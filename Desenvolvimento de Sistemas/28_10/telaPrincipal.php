<?php
    include('bd/protected.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Tela inicial</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Em andamento</a></li>
                <li class="nav-item"><a class="nav-link" href="./bd/logout.php">Sair</a></li>
            </ul>

            <h1>Bem vindo ao Sistema <?php echo $_SESSION['nome']; ?></h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>João</td>
                        <td>Pessin</td>
                    </tr>

                    <tr>
                        <td>Fernando</td>
                        <td>Santos</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>
