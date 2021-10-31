<?php
$enteros = array( 
    array(4,6,8,1), 
    array(0,4,1,6), 
    array(5,1,7,8), 
    array(3,9,2,7) 
); 

//Metodo para buscar el valor maximo de toda la matriz y coger su posicion en la fila y en la columna.
function maxMatriz($enteros) {
    for ($fila = 0; $fila < 3; $fila++) {
        for ($col = 0; $col < 3; $col++) {
            if ($enteros[$fila][$col] > $max) {
                $max = $enteros[$fila][$col];
                $filamax = $fila;
                $colmax = $col;
            }
        }
    }
    echo "El valor maximo de la matriz es: $max y su posicion es, en la fila: $filamax y en la columna: $colmax";
}
maxMatriz($enteros);
?>