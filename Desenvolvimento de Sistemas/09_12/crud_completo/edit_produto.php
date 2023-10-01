<?php
    print_r($_GET);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Editar produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <h1>Editar produto</h1>
        <form action="" method="post">
            <label for="">Nome produto</label>
            <input type="text" name="nome"><br>
            <label for="">Valor</label>
            <input type="text" name="valor"><br>
            <label for="">Quantidade</label>
            <input type="text" name="quantidade"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>