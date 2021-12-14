<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 15</title>

<meta charset='UTF-8' />

</head>

<?php

$ciudad[]="Madrid";
$ciudad[]="Barcelona";
$ciudad[]="Londres";
$ciudad[]="New York";
$ciudad[]="Los angeles";
$ciudad[]="Chicago";

foreach ($ciudad as $nombre => $contenido){
	 
	echo "La ciudad con el índice $nombre tiene el nombre de $contenido.<br>";
 
}



?>




</body>
</html>