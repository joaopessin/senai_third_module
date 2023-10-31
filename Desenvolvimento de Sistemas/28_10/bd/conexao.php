<?php
/* Connect to a MySQL database using driver invocation */

try{
    $dsn = 'mysql:dbname=aula_sanadp;host=localhost';
    $user = 'root';
    $password = 'usbw';

    $dbh = new PDO($dsn, $user, $password);
}catch(PDOException $e){
    echo "Erro de conexão com o Banco de Dados";
    //echo ($e);
}

?>