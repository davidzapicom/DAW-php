<?php
$matriz = array(
    array(1, 14, 8, 3),
    array(6, 19, 7, 2),
    array(3, 13, 4, 1),
);
   
    for ($col = 0; $col < 4; $col++) {
        for ($fila = 0; $fila < 3; $fila++) {
            if ($matriz[$fila][$col] > $max) {
                $max = $matriz[$fila][$col];
                $filamax = $fila;
                $colmax = $col;
            }
        }
    }
    echo"El valor maximo de la matriz es: $max y su posicion es, en la fila: $filamax y en la columna: $colmax";
}

?>