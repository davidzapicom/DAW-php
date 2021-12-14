<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 22</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	$numeros = 50;
	
	while ($numeros >= 40){

		echo $numeros . "  ";
		
		$numeros--;
	
	}
	
	echo "<br>";
	echo "-----------------------------------------";
	echo "<br>";
	
	$contador = 1;
	
	while($contador < 6) {
		
		$doble = $contador * 2;
		
		echo "Doble de " . $contador . " --> " . $doble . "<br>";
		
		$contador++;
		
	}


?>


</body>
</html>