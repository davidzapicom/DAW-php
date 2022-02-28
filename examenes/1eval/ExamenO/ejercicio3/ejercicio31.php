<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 3-1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		session_start();
		if(isset($_SESSION["nom"]) && isset($_SESSION["ape"]) && isset($_SESSION["rol"])){

	?>

	<h2>Hola <?php echo ($_SESSION['nom'])." ".$_SESSION['ape'];?>, tu rol es <?php echo ($_SESSION['rol']);?> </h2>

	<form action="" method="post">
	 	<p>Usuario <input name="user" type="text"></p>
	 	<p>Contraseña <input name="contra" type="password"></p>
	 	<p>Nombre <input name="nombre" type="text"></p>
	 	<p>Apellidos <input name="apellidos" type="text"></p>
	 	<p>E-mail <input name="mail" type="email"></p>
	 	<p>Rol <input name="rol" type="text"></p>
	 	<p><input type="submit" value="Insertar"  name="ingresar"></p>
	 	<p><input type="submit" value="Cerrar Sesión"  name="salir"></p>
	</form>


	<?php 

		}


		$conexion = mysqli_connect('localhost', 'grabador', 'grabador', 'usuarios');
		$conexion->set_charset("utf-8");
		if (mysqli_connect_errno()) {
			printf("conexion fallida %s\n", mysqli_connect_error());
		 	exit();
		}

		if (isset($_POST['ingresar'])) {
			$usuario=$_POST['user'];
			$pass=$_POST['contra'];
			$nombre=$_POST['nombre'];
			$apell=$_POST['apellidos'];
			$mail=$_POST['mail'];
			$rol=$_POST['rol'];

			if($_SESSION['rol']=="grabador") {
				$sql = "INSERT INTO personas (usuario, contraseña, nombre, apellidos, e-mail, rol) VALUES ('$usuario','$pass','$nombre','$apell','$mail','$rol');";

				if (mysqli_query($conexion, $sql)) {
		 			echo "<p> Se ha creado con exito</p>";
				}
				else {
					echo " <br> Error: " . $sql . "<br>" . mysqli_error($conexion);
				}
			}
			else {
				echo "<p>No tienes suficientes permisos para realizar esta operación, tienes el rol ".$_SESSION['rol']."</p>";
			}
		}

		if (isset($_POST['salir'])){
		 
			session_destroy();
		 
			header("location:ejercicio3.php");
		}

		mysqli_close($conexion);

	?>


</body>
</html>