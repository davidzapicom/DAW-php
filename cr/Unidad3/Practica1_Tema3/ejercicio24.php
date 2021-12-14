<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 24</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	$numeros = 50;
	
	do{
		
		echo $numeros . "  ";
		
		$numeros--;
	
	}while ($numeros >= 40);
	
	echo "<br>";
	echo "-----------------------------------------";
	echo "<br>";
	
	$contador = 1;
	
	do{
	
		$doble = $contador * 2;
		
		echo "Doble de " . $contador . " --> " . $doble . "<br>";
		
		$contador++;
	
	}while($contador < 6);

?>


</body>
</html>