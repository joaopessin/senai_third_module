<?php
    //print_r($_GET);
    include('conexao.php');

    $idProd;

    if(!isset($_GET['idProd'])){
        echo 'Ação invalida';
        die();
    }else{
        $idProd=$_GET['idProd'];
        $query = $dbh->prepare('SELECT * FROM produtos WHERE id=:idProd');

        $query->execute(array(
            ':idProd' => $idProd
        ));

        $linha = $query->fetch();
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Atualizar produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <h1>Atualizar Produto</h1>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="idProd" value="<?php echo $_GET['idProd']?>">
            <label for="">Nome</label>
            <input type="text" name="nome" value="<?php echo $linha['nome']?>"  id="" > <br>
            <label for="">Quantidae</label>
            <input type="text" name="quantidade" id=""> <br>
            <label for="">Preco</label>
            <input type="text" name="preco" id=""> <br>
            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>