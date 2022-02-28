<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 2-1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	session_start();

	$respuesta=$_POST['respuesta'];

	if ($respuesta==$_SESSION['resultado']) {
		echo "<h1>Respuesta acertada el número es, ".$respuesta."</h1>";
	}

	else {
		echo "<h1>Has fallado, vuelve a jugar</h1>";
	}

	session_destroy();
	?>
	<form action="" method="POST">
		<p><input type="submit" name="volver" value="Volver a jugar"></p>
	</form>

	<?php

	if (isset($_POST['volver'])) {
		session_destroy();
		header("Location:ejercicio2.php");
	}

	?>
</body>
</html>