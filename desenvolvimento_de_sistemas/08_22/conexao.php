<?php
/* Conectando ao servidor mysql */
$dsn = 'mysql:dbname=loja;host=localhost;port=3306';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

?>