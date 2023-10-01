<?php
    include('conexao.php');
    echo '<pre>';
    print_r($_POST); 
    echo '</pre>';

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $idProd = $_POST['idProd'];

    $query = $dbh->prepare('UPDATE produtos SET nome=:nome,
     quantidade=:quantidade, preco=:preco 
     WHERE id=:idProd;');

    $query->execute(array(
        ':nome' => $nome,
        ':quantidade' => $quantidade,
        ':preco' => $preco,
        ':idProd' => $idProd
    ));
    
?>