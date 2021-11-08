<?php
$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");
$count = count($ciudades);

for ($i = 0; $i < $count; $i++) {
    echo "La ciudad con el índice $i tiene el nombre de $ciudades[$i] <br/>";
}
?>