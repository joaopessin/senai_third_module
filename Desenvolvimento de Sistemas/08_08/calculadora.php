<?php
    //<pre/>: Exibe de maneira formatada
    //print_r($_GET): // Printa qualquer resultado(array, objeto e afins)
    /* 
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';

    echo $_GET['n1'];
    */

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $operacao = $_GET['operacao'];
    $resultado = 0;

    echo '<h1>Resultado da Operação</h1>';

    if($operacao == 'soma') {
        $resultado = $n1 + $n2;
    } elseif($operacao == 'subtracao') {
        $resultado = $n1 - $n2;
    } elseif($operacao == 'multiplicacao') {
        $resultado = $n1 * $n2;
    } elseif($operacao == 'divisao') {
        $resultado = $n1 / $n2;
    }

    echo $resultado;
?>
