<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=crud_revisao; host=localhost; port=3308';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch(PDOExcepetion $e){
    //throw new MyDatabaseException( $Exception -> getMessage() , (int)$Exception->getCode() );
    
    echo 'Erro de conexão';
}

?>
