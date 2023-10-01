<?php
    include('conexao.php');

    echo '<pre>';
    print_r($_POST); 
    echo '</pre>';

    $nomeProduto = $_POST['nome'];
    $qtdProduto = $_POST['quantidade'];
    $precoProduto = $_POST['preco'];

    $query = $dbh -> prepare('INSERT INTO produtos(nome, quantidade, preco)
    VALUES(:nome, :quantidade, :preco);');

    $query -> execute(array(
        ':nome' => $nomeProduto,
        ':quantidade' => $qtdProduto,
        ':preco' => $precoProduto
    ));
?>
