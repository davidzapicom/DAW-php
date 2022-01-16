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
	$sessionErr = "";
	if ($_SESSION["rol"] === "administrador") {
		if (isset($_POST["introducir"])) {
			$_SESSION["connection"] = mysqli_connect("localhost", "administrador", "administrador", "ventas");
			$introducir = "INSERT INTO `articulos` (id_articulo, descripcion, precio, caracteristicas) VALUES (NULL, '{$_POST["desc_articulo"]}', '{$_POST["precio_articulo"]}', '{$_POST["carac_articulo"]}')";
			mysqli_query($_SESSION["connection"], $introducir);
		}
	} else {
		$sessionErr = "No eres administrador";
	}
	if (isset($_POST["consultar"])) {
		header("Location: consultar.php");
	}
	?>
	<div class="container">
		<form action="#" method="post">
			<p><?php echo 'Conectado el usuario ' . $_SESSION["usuario"] . ' con el rol ' . $_SESSION["rol"] ?></p>
			<p class="error"><?php echo $sessionErr ?></p>
			<div class="form-group">
				<input class="form-input" type="text" name="desc_articulo" placeholder="Descripcion">
			</div>
			<div class="form-group">
				<input class="form-input" type="text" name="precio_articulo" placeholder="Precio">
			</div>
			<div class="form-group">
				<input class="form-input" type="text" name="carac_articulo" placeholder="Caracteristicas">
			</div>
			<div class="form-group">
				<button type="submit" name="introducir">Introducir</button>
			</div>
			<div class="form-group">
				<button type="submit" name="consultar">Consultar</button>
			</div>
		</form>
	</div>
</body>

</html>