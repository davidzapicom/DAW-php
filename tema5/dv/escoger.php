<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<?php
	session_start();
	?>
	<div class="container">
		<form action="#" method="post">
			<p><?php echo 'Conectado el usuario ' . $_SESSION["usuario"] . ' con el rol ' . $_SESSION["rol"] ?></p>
			<div class="form-group">
				<button type="submit" name="introducir">Introducir</button>
			</div>
			<div class="form-group">
				<button type="submit" name="consultar">Consultar</button>
			</div>
		</form>
	</div>
	<?php

	if (isset($_POST["introducir"])) {
		header("Location: introducir.php");
	} else if (isset($_POST["consultar"])) {
		header("Location: consultar.php");
	}
	?>
</body>

</html>