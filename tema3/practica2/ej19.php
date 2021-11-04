<?php
$enteros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count = count($enteros);
for ($enteros = 0; $enteros < $count; $enteros++){
    $acumulador = $acumulador + $enteros;
}
    echo $acumulador;
?>