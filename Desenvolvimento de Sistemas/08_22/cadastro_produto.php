<?php
    include('conexao.php');
    
    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    */

    if(isset($_POST['nome'], $_POST['valor'], $_POST['quantidade']) && $_POST['nome'] != '') { // isset: verifica se a variavel existe
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $categoria = $_POST['categoria'];

        echo 'Cadastrado!';
    } else {
        echo 'Variáveis não definidas!';
        die();
    }

    /*
    echo '<br>';
    echo $nome;
    echo '<br>';
    echo $valor;
    echo '<br>';
    echo $quantidade;
    echo "<br>";
    */

    $query = $dbh->prepare('insert into produtos (nome, valor, quantidade, categoria) values(:nome, :valor, :quantidade, :categoria);');

    try {
        $query->execute(array(
            ':nome' => $nome,
            ':valor' => $valor,
            ':quantidade' => $quantidade,
            ':categoria' => $categoria
        ));
    } catch(PDOExcepetion $e) {
        echo 'Erro!';
    }

    //print_r ($dbh);
?>
