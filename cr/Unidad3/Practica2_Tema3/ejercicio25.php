<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 25</title>

<meta charset='UTF-8' />

</head>

<?php

$cosas = [

5 => 1,
12 => 2,
13 => 56,
"x" => 42

];

foreach ($cosas as $nombre => $contenido){
	
	echo  "Nombre $nombre con contenido $contenido<br> ";

}

echo "<br><br> Numero de elementos del array --> " . count($cosas) . ". <br>";

unset($cosas[5]);

echo "<br><br>Array tras borrar el elemento 5: <br><br>";

foreach ($cosas as $nombre => $contenido){
	
	echo  "Nombre $nombre con contenido $contenido<br> ";

}

unset($cosas);

echo '<br><br>Array borrado con unset($cosas).';

?>

</body>
</html>