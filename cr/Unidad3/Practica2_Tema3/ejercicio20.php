<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 20</title>

<meta charset='UTF-8' />

</head>

<?php

$animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");

$numeros = array(12, 34, 45, 52, 12);

$otros = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);

$fusion = array_merge($animales, $numeros, $otros);

echo  "Fusion de los tres arrays: <br><br>";

foreach ($fusion as $nombre => $todo){
	
	echo "$todo <br> ";

}


?>


</body>
</html>