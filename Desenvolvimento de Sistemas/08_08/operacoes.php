<?php
    // Tipos de variáveis
    $var1 = 10;
    $var2 = 20;
    $var3 = 22.5;
    $texto = '2023';

    // Operações
    echo $var1 + $var2 + $var3;

    echo '<br/>';
    echo $var1 * $var2;

    echo '<br/>';
    echo $var1 + $texto;

    echo '<br/>';
    echo $var1 . $texto; // Concatenação

    function somaDois($primeiro, $segundo) { return $primeiro + $segundo; }

    echo '<br/>';
    echo somaDois($var1, $var2);
?>
