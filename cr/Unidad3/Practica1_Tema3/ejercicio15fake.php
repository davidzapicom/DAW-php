<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 15 fake</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	if ( isset( $_POST['submit'] ) ) {
		
		$horas_trabajadas = $POST["horas_trabajadas"];
		$dinero_hora = $POST["dinero_hora"];
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
		
		
	}

?>

<form action="" metod="post">

  Horas trabajadas: <input type="text" name="horas_trabajadas">
  <br/>
  <br/><br/>
  Dinero por hora: <input type="text" name="dinero_hora">
  <br/><br/>
  <br/>
  <input type="submit" value="Calcular">
  
</form> 


</body>
</html>