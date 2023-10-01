<?php
  include('../database/conexao.php');

  if(isset($_POST['nome'], $_POST['categoria'], $_POST['preco'], $_POST['quantidade']) && $_POST['nome'] != '' && $_POST['categoria'] != '' && $_POST['preco'] != '' && $_POST['quantidade'] != '') {
    $nome_produto = $_POST['nome'];
    $categoria_produto = $_POST['categoria'];
    $preco_produto = $_POST['preco'];
    $quantidade_produto = $_POST['quantidade'];
  } else {
    echo '<h2>Variáveis não definidas!</h2>';
    die();
  }

  try {
    $consulta = $banco -> prepare(' INSERT INTO produto(nome, categoria, preco, quantidade) VALUES(:nome, :categoria, :preco, :quantidade); ');

    $consulta -> execute(array(
      ':nome' => $nome_produto,
      ':categoria' => $categoria_produto,
      ':preco' => $preco_produto,
      ':quantidade' => $quantidade_produto
    ));

    echo '<h2>Cadastrado com sucesso!</h2>';
  } catch(PDOExcpetion $excecao) {
    echo '<h2>Erro: '.$excecao -> getMessage().'</h2>';
    echo '<h2>Código: '.$excecao -> getCode().'</h2>';
  }
?>
