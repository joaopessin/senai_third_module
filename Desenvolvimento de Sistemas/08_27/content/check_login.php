<?php
    include('connection.php');

    $query = $dbh -> prepare('SELECT * FROM login');
    $query -> execute();
    $usuarios = $query -> fetchAll();

    $contador = 0;

    if($_POST['e_mail'] == '' && $_POST['senha'] == '') {
        echo '<h2>PREENCHA OS CAMPOS CORRETAMENTE</h2>';
        die();
    } else if(isset($_POST['e_mail'], $_POST['senha'])) {
      foreach($usuarios as $usuario) {
        if($_POST['e_mail'] == $usuario['e_mail'] && $_POST['senha'] == $usuario['senha']) {
          echo '<h2>ACESSO EFETUADO COM SUCESSO</h2>';
          $contador += 1;
          break;
        }
      }

      if($contador == 0) {
        echo '<h2>USUÁRIO NÃO EXISTE</h2>';
      }
        
    } else {
      echo '<h2>ERRO</h2>';
      die();
    }
?>
