<?php
  include("./conexao.php");

  /*
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  */

  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if(empty($login) || empty($senha)) {
    echo "<script>alert('Dados obragatórios vazios')</script>";

    // sleep(2);
    // header('Location: ../login.php');
  } else {
    try {
      $query = $dbh -> prepare("SELECT login, senha FROM usuarios WHERE login = :login AND senha = :senha;");

      $query -> execute(array(
        ':login' => $login,
        ':senha' => $senha
      )
    );

    $resultado = $query -> fetch();

    if(empty($resultado)) { echo "<script>alert('Usuário e/ou senha inválidos')</script>"; }

    } catch(Exception $e) {
      echo "Erro na consulta do banco: ".$e;
    }
  }

?>
