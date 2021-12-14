<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 13</title>

<meta charset='UTF-8' />

</head>

<?php

$array[]="Pedro";
$array[]="Ana";
$array[]=34;
$array[]=1;

print_r($array);

echo "<br><br>Muestra el array por orden.<br><br>";

echo "------------------------------------------------------------<br><br>";

var_dump($array);

echo "<br><br>Muestra el tamaño del array, de tipo de datos tiene.<br><br>";

echo "------------------------------------------------------------<br><br>";

var_export($array);

echo "<br><br>Parecido al primero pero algo mas simple.<br><br>";


?>




</body>
</html>