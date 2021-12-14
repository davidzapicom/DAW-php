<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 15</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	$horas_trabajadas = 49;
	$dinero_hora = 5;
	$dinero_ganado = 0;
		
	if($horas_trabajadas <= 40){
			
		$dinero_ganado = $horas_trabajadas * $dinero_hora;
		
		echo "Dinero ganado: " . $dinero_ganado;
			
	}elseif($horas_trabajadas > 40 && $horas_trabajadas <= 48){
		
			$horas_extra = $horas_trabajadas - 40;
			
			$dinero_extra = ($dinero_hora * 2) * $horas_extra;
			
			$dinero_ganado = ( ($horas_trabajadas - $horas_extra) * $dinero_hora) + $dinero_extra;
		
		echo "Dinero ganado: " . $dinero_ganado;
		
	}elseif($horas_trabajadas > 48) {
		
			$horas_triple = $horas_trabajadas - 48;
			
			$dinero_triple = ($dinero_hora * 3) * $horas_triple;
		
			$horas_extra = $horas_trabajadas - (40 + $horas_triple);
			
			$dinero_extra = ($dinero_hora * 2) * $horas_extra;
			
			$dinero_ganado = ( ($horas_trabajadas - $horas_extra) * $dinero_hora) + $dinero_extra + $dinero_triple;
		
		echo "Dinero ganado: " . $dinero_ganado;
		
		
	}

?>

</body>
</html>