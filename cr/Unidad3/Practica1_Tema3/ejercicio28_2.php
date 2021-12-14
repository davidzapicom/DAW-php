

<?php

	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	$numero3 = $_POST["numero3"];
	$numero4 = $_POST["numero4"];
	$numero5 = $_POST["numero5"];

	$media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5) / 5;
	
	$maximo = max($numero1,$numero2,$numero3,$numero4,$numero5);

	$minimo = min($numero1,$numero2,$numero3,$numero4,$numero5);
	
	echo "Media de los numeros introducios: " . $media . "<br>";
	
	echo "Maximo de los numeros introducios: " . $maximo . "<br>";
	
	echo "Minimo de los numeros introducios: " . $minimo . "<br>";


?>

