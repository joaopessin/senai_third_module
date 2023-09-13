<?php
    include('conexao.php');

    $query = $dbh->prepare('SELECT * FROM categoria');
    $query->execute();

    $categorias = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <h1>Cadastro de Produto</h1>
        <form action="cad_produto.php" method="post">
            <label for="">Nome produto</label>
            <input type="text" name="nome"><br>
            <label for="">Valor</label>
            <input type="text" name="valor"><br>
            <label for="">Quantidade</label>
            <input type="text" name="quantidade"><br>
            <label for="">Categoria</label>
            <select name="categoria" id="">
                <?php
                    foreach($categorias as $linha){
                        echo '<option value="'.$linha['cod'].'">'.$linha['categoria'].'</option>';
                    }
                ?>
            </select><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>