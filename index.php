<!DOCTYPE html>
<html lang="en">
<head>
	//commit
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi primer página</title>
</head>
<body>
	<h1>Mi primer página</h1>

	<?php
	echo "<h1>Hola Mundo!</h1>";
	//codigo php "hola mundo"

	echo "<p>Estamos en nuestra primera clase de php.</p>";
	$color = "rojo";
	echo "Mi coche es " . $color . "<br>";
	echo "Mi coche es $color <br>";
	echo 'Mi coche es ' . $color . '<br>';
	echo 'Mi coche es $color <br>';
	var_dump ($color);

	echo "<br>La variable color en mayusculas tiene valor " . strtoupper($color);
	echo "<br>La variable color en mayusculas tiene valor " . strtolower($color);
	$frase = '<br>Arquimedes gritaba: "Eureka, Eureka" mientras celebraba su descubrimiento.';
 	echo $frase;

	 $frase = "<br>Arquimedes gritaba: 'Eureka, Eureka' mientras celebraba su descubrimiento.";
 	echo $frase;
	?>


	<p>Tenemos clase lunes, miércoles y viernes.</p>
	
</body>
</html>