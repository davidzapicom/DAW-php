<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 16</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	$numero1 = rand(1,100);
	$numero2 = rand(1,100);
	
	echo "Valor del numero 1 es --> " . $numero1 . "<br/> ";
	echo "Valor del numero 2 es --> " . $numero2 . "<br/> <br/> <br/>";
	

	if ( $numero1 > $numero2) {

		echo "Numero 1 es mayor que numero 2 y ";
		
		if ( $numero1 % 2 == 0 ) {
			
			echo "es par.";
			
		}else{
			
			echo "es impar.";
			
		}

	}else{ 
	
	
		echo "Numero 2 es mayor que numero 1 y ";
		
		if ( $numero2 % 2 == 0 ) {
			
			echo "es par.";
			
		}else{
			
			echo "es impar.";
			
		}

	}

?>


</body>
</html>