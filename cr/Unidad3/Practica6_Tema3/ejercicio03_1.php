<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 03 - Confirmacion</title>
	</head>
	<body>

<?php

	setcookie("usuario", $_POST['usuario'], time() + 360);
	setcookie("password", $_POST['password']);
	
	echo "<br/> Datos introducidos: <br/>
			Usuario: " . $_COOKIE["usuario"] . "<br/>
			Contraseña: " . $_COOKIE["password"] . "<br/>";


	
?>

	<p>¿Son correctos?</p><br/>
	
	<a href="ejercicio03_hola.php">Si</a><br/>
	
	<a href="ejercicio03.php">No</a>
