
<?php

	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];

	$potencia = pow($numero1,$numero2);
	
	echo $numero1 . " elevado a " . $numero2 . " = " . $potencia;

?>

