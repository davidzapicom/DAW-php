<?php
$array1 = array("Lagartija", "Araña", "Perro", " Gato", "Ratón");
$array2 = array(12, 34, 45, 52, 12);
$array3 = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);
$resultado = array_push($array1, $array2, $array3);
var_dump($resultado);
?>