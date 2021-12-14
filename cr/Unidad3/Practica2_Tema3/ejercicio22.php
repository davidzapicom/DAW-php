<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 22</title>

<meta charset='UTF-8' />

</head>

<?php

$fusion = array();

array_push($fusion,"Lagartija", "Araña", "Perro", "Gato", "Raton");

array_push($fusion, 12, 34, 45, 52, 12);

array_push($fusion,"Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);

$alreves = array_reverse($fusion);

echo  "Inverso de los tres arrays fusionados: <br><br>";

foreach ($alreves as $nombre => $todo){
	
	echo "$todo <br> ";

}


?>


</body>
</html>