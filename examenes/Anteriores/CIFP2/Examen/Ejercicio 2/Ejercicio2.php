<?php
    $binario = array();
    $binario[0] = ceil(rand(0 , 1));
    $binario[1] = ceil(rand(0 , 1));
    $binario[2] = ceil(rand(0 , 1));
    $binario[3] = ceil(rand(0 , 1));
    $binario[4] = ceil(rand(0 , 1));
    $binario[5] = ceil(rand(0 , 1));
    $binario[6] = ceil(rand(0 , 1));
    $binario[7] = ceil(rand(0 , 1));
    $potencias = array();
    $potencias[0] = 128;
    $potencias[1] = 64;
    $potencias[2] = 32;
    $potencias[3] = 16;
    $potencias[4] = 8;
    $potencias[5] = 4;
    $potencias[6] = 2;
    $potencias[7] = 1;
    $numero = 0;
    echo("Binario: ");
    for( $x = 0; $x < count($binario); $x++){
        echo($binario[$x] . " ");
    }
    echo("<br>");
    for( $x = 0; $x < count($binario); $x++){
        echo($binario[$x] . "*" . $potencias[$x] . "<br>");
        if( $binario[$x] == 1){
            $numero += $potencias[$x];
        }
    }
    echo("Decimal: " . $numero);
?>