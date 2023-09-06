<?php
    include('conexao.php');

    $query = $dbh -> prepare(SELECT * FROM categoria);
    $query -> execute();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta http-equiv="X-UA-Compatible" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="form">
            <hr class="hr">
        <h1 class="title">Cadastro de produtos</h1>
        <form class="fomrper" action="cadastro_produto.php" method="post">
            <label class="aling_label" for="">Nome produto</label>
            <input type="text" name="nome"><br>
            <label class="aling_label" for="">Valor</label>
            <input type="text" name="valor" id=""><br>
            <label class="aling_label" for="">Quantidade</label>
            <input type="text" name="quantidade" ><br>
            <label for="">Categoria</label>
            <select name="categoria"><br>
            <input class="aling_label" type="submit" value="Cadastrar"><br>
        </form>
        <hr class="hr2">
    </div>
    </body>
</html>
