<?php
/* Conectando ao servidor mysql */
$dsn = 'mysql:dbname=loja;host=localhost;port=3308';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
    echo 'Erro de conexão.';
}
?>
