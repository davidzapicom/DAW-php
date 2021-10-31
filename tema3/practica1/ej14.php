<?php
$n1 = 3;
$n2 = 8;
$n3 = 14;

if ($n1 > $n2) {
    if ($n1 > $n3) {
        echo "El mayor es: $n1, que es el numero 1";                                             
    } else {
        echo " El mayor es: $n3, que es el numero 3";     
    }
} else if ($n2 > $n3) {
    echo " El mayor es: $n2, que es el numero 2";
} else {
    echo " El mayor es: $n3, que es el numero 3.";
}

?>