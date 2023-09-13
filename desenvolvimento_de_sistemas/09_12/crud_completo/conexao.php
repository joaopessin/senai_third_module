<?php
/* Conectando ao servidor mysql*/
$dsn = 'mysql:dbname=loja;host=localhost;port=3309';
$user = 'root';
$password = '';

try{
    $dbh = new PDO($dsn, $user, $password);
}catch(PDOExcpetion $e){
    //throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
}

?>