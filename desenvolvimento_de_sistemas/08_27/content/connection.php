<?php
$dsn = 'mysql:dbname=web_login_test;host=localhost;port=3307';
$user = 'root';
$password = '';

try {
  $dbh = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo '<h2>ERRO DE CONEXÃO</h2>';
}
?>
