<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 21</title>

<meta charset='UTF-8' />

</head>

<?php

$fusion = array();

array_push($fusion,"Lagartija", "Araña", "Perro", "Gato", "Raton");

array_push($fusion, 12, 34, 45, 52, 12);

array_push($fusion,"Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);

echo  "Fusion de los tres arrays: <br><br>";

foreach ($fusion as $nombre => $todo){
	
	echo "$todo <br> ";

}


?>


</body>
</html>