<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 16</title>

<meta charset='UTF-8' />

</head>

<?php

$ciudad = [

"MD" => "Madrid",
"BC" => "Barcelona",
"LN" => "Londres",
"NY" => "New York",
"LA" => "Los angeles",
"CH" => "Chicago"

];

foreach ($ciudad as $nombre => $contenido){
	 
	echo "El índice del array que contiene como valor $contenido es $nombre. <br>";
 
}



?>




</body>
</html>