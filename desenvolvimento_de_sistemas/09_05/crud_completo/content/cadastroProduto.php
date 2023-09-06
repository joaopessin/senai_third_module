<?php
    include('conexao.php');
    echo '<pre>';
    print_r($_POST); 
    echo '</pre>';

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $query = $dbh->prepare('INSERT INTO produtos (nome, quantidade, preco) 
    VALUES (:nome, :quantidade, :preco);');

    $query->execute(array(
        ':nome' => $nome,
        ':quantidade' => $quantidade,
        ':preco' => $preco
    ));
    
?>