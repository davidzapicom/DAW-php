<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 24</title>

<meta charset='UTF-8' />

</head>

<?php

$numeros = [

"Numero1" => 3,
"Numero2" => 2,
"Numero3" => 8,
"Numero4" => 123,
"Numero5" => 5,
"Numero6" => 1

];

sort($numeros);

echo "<table border = 1px>";

foreach ($numeros as $contador => $algo){
	
	echo "<tr>";
	
echo  "<td>Posicion $contador con numero $algo </td>";

echo "</tr>";

}

echo "</table>";
	

?>

</body>
</html>