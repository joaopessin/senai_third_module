<?php
    include('conexao.php');
    //echo '<pre>';
    //print_r($_POST); 
    //echo '</pre>';

    $idProd = $_GET['idProd'];
    echo 'PRODUTO DELETADO!';

    $query = $dbh->prepare('DELETE FROM produtos 
     WHERE id=:idProd;');

    $query->execute(array(
        ':idProd' => $idProd
    ));
    
?>