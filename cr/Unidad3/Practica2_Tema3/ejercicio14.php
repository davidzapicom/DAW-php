<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 14</title>

<meta charset='UTF-8' />

</head>

<?php

$informacion = [

"Nombre" => "Pedro Torres",
"Dirección" => "C/Mayor, 37",
"Teléfono" => 123456789

];

echo "Informacion personal:<br><br>";

foreach ($informacion as $nombre => $contenido){
	
	echo "$nombre : $contenido <br>";
 
}


?>




</body>
</html>