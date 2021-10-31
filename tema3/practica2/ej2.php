<?php
$idiomas = array(
    array(1, 14, 8, 3),
    array(6, 19, 7, 2),
    array(3, 13, 4, 1),
);

foreach ($idiomas as $matriz) {
    foreach ($matriz as $fila) {
        echo " $fila ";
    }
    echo "<br>";
}
?>