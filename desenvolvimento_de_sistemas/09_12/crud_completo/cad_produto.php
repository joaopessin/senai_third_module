<?php
    include('conexao.php');
    if(isset($_POST['nome'],$_POST['valor'],$_POST['quantidade']) && $_POST['nome']!=''){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $categoria = $_POST['categoria'];
    }else{
        echo 'Variaveis não definidas';
        die();
    }
    try{
        $query = $dbh->prepare('INSERT INTO produtos (nome, valor, quantidade, cat) VALUES(:nome, :valor,:quantidade,:categoria);');

        $query->execute(array(
            ':nome' => $nome,
            ':valor'=> $valor,
            ':quantidade'=>$quantidade,
            ':categoria'=>$categoria
        ));
        echo 'Produto Cadastrado!!!';
    }catch(PDOExcpetion $e){
        echo 'erro';
    }

    //print_r($dbh);
?>