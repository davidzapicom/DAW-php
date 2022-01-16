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
	$passErr = $userErr = $usuSuccess = $usuRegistrado = $passRegistrado = $passCifradaRegistrado = $rolRegistrado = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["password"] != $_POST["password2"]) {
			$passErr = "Las contraseñas no coinciden";
		} else {
			$enlace = mysqli_connect("localhost", "administrador", "administrador", "ventas");
			$comprobarUsuario = 'SELECT `usuario` FROM `usuarios` WHERE usuario="' . $_POST["user"] . '"';
			$dato = mysqli_query($enlace, $comprobarUsuario);
			if (mysqli_num_rows($dato) == 0) {
				$passCifrada = hash_hmac('sha512', $_POST["password"], "primeraweb");
				$introducirUsuario = "INSERT INTO `usuarios` (idusuario, usuario, password, rol) VALUES (NULL, '{$_POST["user"]}', '{$passCifrada}', '{$_POST["tipoUsuario"]}')";
				mysqli_query($enlace, $introducirUsuario);

				$dato2 = mysqli_query($enlace, $comprobarUsuario);
				if (mysqli_num_rows($dato2) != 0) {
					$usuSuccess = "Usuario Registrado";
					$usuRegistrado = "Usuario: " . $_POST["user"];
					$passRegistrado = "Contraseña: " . $_POST["password"];
					// $passCifradaRegistrado = $passCifrada;
					$rolRegistrado = "Rol: " . $_POST["tipoUsuario"];
				}
			} else {
				$userErr = "Usuario no disponible";
			}
		}
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
				<input class="form-input" type="password" name="password2" placeholder="Repetir Contraseña">
				<p class="error"><?php echo $passErr ?></p>
			</div>
			<div class="form-group">
				<p>Selecciona un rol</p>
				<select name="tipoUsuario">
					<option value="consultor">Consultor</option>
					<option value="administrador">Administrador</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="registrarse">Registrarse</button>
			</div>
			<p class="success"><?php echo $usuSuccess ?></p>
			<p><?php echo $usuRegistrado ?></p>
			<p><?php echo $passRegistrado ?></p>
			<p><?php echo $rolRegistrado ?></p>
			<a href="index.php" class="signUp">Iniciar Sesion</a>
		</form>
	</div>
</body>

</html>