
<?php

	$numero1 = $_POST["a"];
	$numero2 = $_POST["b"];

	if (isset($_POST["Sumar"])){
		
		$suma = $numero1 + $numero2;
		
		echo "La suma de " . $numero1 . " + " . $numero2 . " = " . $suma;
		
	}
	
	if (isset($_POST["Restar"])){
		
		$resta = $numero1 - $numero2;
		
		echo "La resta de " . $numero1 . " - " . $numero2 . " = " . $resta;
		
	}
	
	if (isset($_POST["Multiplicar"])){
		
		$multiplicacion = $numero1 * $numero2;
		
		echo "La multiplicacion de " . $numero1 . " * " . $numero2 . " = " . $multiplicacion;
		
	}
	
	if (isset($_POST["Dividir"])){
		
		$division = $numero1 / $numero2;
		
		echo "La division de " . $numero1 . " / " . $numero2 . " = " . $division;
		
	}

?>

