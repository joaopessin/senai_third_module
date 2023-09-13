<?php

$dsn = 'mysql:dbname=loja; host=127.0.0.1; port=3309';
$user = 'root';
$password = '';

try{
$dbh = new PDO($dsn, $user, $password);
}catch(PDOExcepetion $e){
    //throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
}
?>