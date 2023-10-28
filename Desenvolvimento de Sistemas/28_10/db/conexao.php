<?php

try {
  $dsn = 'mysql:dbname=aula_sanadp;host=localhost';
  $user = 'root';
  $password = 'usbw';

  $dbh = new PDO($dsn, $user, $password);
} catch(Exception $e) {
  echo "Erro de conexão com o banco de dados: ".$e;
}

?>
