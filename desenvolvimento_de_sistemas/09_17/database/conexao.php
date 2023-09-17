<?php
  $conexao = 'mysql:dbname=loja; host=localhost; port=3308';
  $usuario = 'root';
  $senha = '';

  try {
    $banco = new PDO($conexao, $usuario, $senha);
  } catch(PDOExcpetion $excecao) {
    echo '<h2>Erro: '.$excecao -> getMessage().'</h2>';
    echo '<h2>Código: '.$excecao -> getCode().'</h2>';
  }
?>
