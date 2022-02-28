<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 2</title>
	<meta charset="utf-8">
	<style type="text/css">
		.cartas {
			width: 100%;
			display: flex;
		}
		.carta {
			width: 125px;
			height: 162px;
			margin: 0px 5px;
			background-color: black;
		}
		img {
			margin: 0px 5px;
		}
	</style>
</head>
<body>
	<?php
	session_start();
	$numero = array();

	for ($i=0; $i < 4 ; $i++) { 
		$num = rand(0,1);
		$numero[$i]=$num;
	}

	$ndeci = array(8,4,2,1);

	$sol=0;

	$indices = array();
	$j=0;

	for ($i=0; $i < 4 ; $i++) { 
		if ($numero[$i]==1) {
			$indices[$j]=$i;
			$j++;
			$sol+=$ndeci[$i];
		}
	}

	$_SESSION['resultado']=$sol;

	?>
	<h1>Adivina el número en decimal</h1>
	<h2>El número en BINARIO 
		<?php
			for ($i=0; $i<4; $i++) {
				echo $numero[$i];
			}
		?>
	</h2>

	<?php

	echo "<div class='cartas'>";
	for ($i=0; $i < 4 ; $i++) { 
		if ($numero[$i]==1) {
			if ($i==0) {
				echo "<img src='ocho.jpg'>";
			}
			if ($i==1) {
				echo "<img src='cuatro.jpg'>";
			}
			if ($i==2) {
				echo "<img src='dos.jpg'>";
			}
			if ($i==3) {
				echo "<img src='uno.jpg'>";
			}
		}
		else {
			echo "<div class='carta'></div>";
		}
	}
	echo "</div>";

	?>

	<form action="ejercicio21.php" method="POST">
		<p>Número decimal: <input type="text" name="respuesta"><input type="submit" name="en" value="Enviar"></p>
	</form>	
</body>
</html>