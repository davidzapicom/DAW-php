<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	session_start();
	$userErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["usuario"] = $_POST["user"];
		$passCifrada = hash_hmac('sha512', $_POST["password"], "primeraweb");

		$enlace = mysqli_connect("localhost", "usuariocomprobar", "usuariocomprobar", "ventas");
		$usuario = 'SELECT `usuario`,`password`,`rol` FROM `usuarios` WHERE usuario="' . $_SESSION["usuario"] . '" AND password="' . $passCifrada . '"';
		$dato = mysqli_query($enlace, $usuario);
		$fila = mysqli_fetch_assoc($dato);
		if (isset($fila)) {
			$_SESSION["rol"] = $fila["rol"];
		}
		if (mysqli_num_rows($dato) == 0) {
			$userErr = "Usuario no existe o contraseña incorrecta";
		} else {
			if ($_SESSION["rol"] == "consultor") {
				header("Location: consultar.php");
			} else if ($_SESSION["rol"] == "administrador") {
				header("Location: escoger.php");
			}
		}
		mysqli_close($enlace);
	}
	?>
	<div class="container">
		<form action="#" method="post">
			<div class="form-group">
				<input class="form-input" type="text" name="user" placeholder="Usuario">
				<p class="error"><?php echo $userErr ?></p>
			</div>
			<div class="form-group">
				<input class="form-input" type="password" name="password" placeholder="Contraseña">
			</div>
			<div class="form-group">
				<button type="submit">Iniciar Sesion</button>
			</div>
			<a href="registrar.php" class="signUp">Registrarse</a>
		</form>
	</div>
</body>

</html>