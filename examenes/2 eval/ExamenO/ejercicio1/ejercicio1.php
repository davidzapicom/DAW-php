<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php
		if (!isset($_POST['login'])) {
	?>
	<div>
		<form action="" method="POST">
			<fieldset style="width: 15%; margin: 0px auto;">
				<legend>Inicio de sesión</legend>
				<table style="text-align: center;">
					<tr>
						<th>
							Usuario:
						</th>
						<td>
							<input type="text" name="usu" required="required">
						</td>
					</tr>
					<tr>
						<th>
							Contraseña:
						</th>
						<td>
							<input type="password" name="pass" required="required">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="login" value="Entrar al sitio">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php
		}
		else {
			$conexion = mysqli_connect('localhost', 'root', '', 'video');
			if (mysqli_connect_errno()) {
			    printf("Conexión fallida %s\n", mysqli_connect_error());
			    exit();
			}

			$usu = $_POST['usu'];
			$pass = $_POST['pass'];
			$sql = "SELECT name FROM usuarios WHERE name = '$usu' AND password = '$pass'";
			$result = mysqli_query ($conexion, $sql);

			if(mysqli_num_rows($result) > 0) {
				while ($registro = mysqli_fetch_row($result)) {
					$nombre=$registro[0];
	        	}

		        session_start();

		     	$_SESSION['usu']="$usu";

	?>
		<div>
			<h2>Hola, <?php echo $_SESSION['usu']; ?></h2>
			<form action="" method="POST" style="display: flex; flex-flow: row wrap; justify-content: space-around;">
				<div>
					<a href="../ejercicio2/ejercicio2.php">Insertar película</a>
				</div>
				<div>
					<a href="../ejercicio3/ejercicio3.php">Películas disponibles ordenadas por nota</a>
				</div>
				<div>
					<a href="../ejercicio4/ejercicio4.php">Películas ordenadas por año</a>
				</div>
			</form>
		</div>
	<?php
			}
			else {
				echo "El usuario no existe, se le va a redirigir al inicio";
				unset($_POST['login']);
				header("Refresh:2; url=ejercicio1.php", true);
			}

			mysqli_close($conexion);

		}
	?>
</body>
</html>