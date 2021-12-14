<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 13</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	$numero1 = rand(1,100);
	$numero2 = rand(1,100);
	
	echo "Valor del numero 1 es --> " . $numero1 . "<br/> ";
	echo "Valor del numero 2 es --> " . $numero2 . "<br/> <br/> <br/>";
	

	if ($numero1 == $numero2){ //Multiplica si son iguales
		
		$total = $numero1 * $numero2;
		
		echo "La multiplicacion de " . $numero1 . " y " . $numero2 . " es " . $total;
		
	}elseif ($numero1 > $numero2){ //Resta si numero1 es mayor
		
		$total = $numero1 - $numero2;
		
		echo "La resta de " . $numero1 . " y " . $numero2 . " es " . $total;
		
	}else{ //Sino lo suma
		
		$total = $numero1 + $numero2;
		
		echo "La suma de " . $numero1 . " y " . $numero2 . " es " . $total;
		
	}


?>


</body>
</html>