<?php
    // Digitando no <body/> do HTML
    echo '<h2>Olá mundo!</h2>';

    // Variáveis
    $num1 = 20;
    $num2 = 15;

    // echo '<p>Resultado da soma: '.($num1 + $num2).'</p>';

    // Vetor(array)
    $frutas = ['maçã', 'pessego', 'banana'];

    
    // echo '<p>Frutas disponíveis: </p>';

    // for($i = 0; $i < count($frutas); $i++) { echo '<p>'.$frutas[$i].'</p>'; }

    // foreach($frutas as $fruta) { echo '<p>'.$fruta.'</p>'; }

    // echo '<p>As variáveis são diferentes: '.($num1 != $num2).'</p>';

    /*
    if($num1 > $num2) {
        echo 'O primeiro valor é maior que o segundo.';
    } else {
        echo 'O segundo valor é maior que o primeiro.';
    }
    */

    if(isset($num3)) {
        echo 'A terceira variável EXISTE.';
    } else {
        echo 'A terceira variável NÃO existe.';
    }
?>
