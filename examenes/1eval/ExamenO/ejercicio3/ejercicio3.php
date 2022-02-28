<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 3</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="POST">
	  <p>Usuario: <input type="text" name="user"></p>
	  <p>Contraseña: <input type="text" name="pass"></p>
	  <input name="entrar" type="submit" value="Acceder">
	</form>

	<?php

	$conexion = mysqli_connect('localhost', 'consultor', 'consultor', 'usuarios');
	$conexion->set_charset("utf-8");
	if (mysqli_connect_errno()) {
	    printf("conexion fallida %s\n", mysqli_connect_error());
	    exit();
	}

	if (isset($_POST['entrar'])) {
		$usuario=$_POST['user'];
		$password=$_POST['pass'];

		$sql = "SELECT nombre,apellidos,rol FROM personas WHERE usuario = '$usuario' AND contrasenia = '$password'";
		var_dump($sql);

		$result = mysqli_query ($conexion, $sql);

		if(mysqli_num_rows($result) > 0) {
			while ($registro = mysqli_fetch_row($result)) {
               $salida1=$registro[0];
               $salida2=$registro[1];
               $salida3=$registro[2];
        	}

	        session_start();
	     
	        $_SESSION['nom']="$salida1";
	        $_SESSION['ape']="$salida2";
	        $_SESSION['rol']="$salida3";

	        header("Location: ejercicio31.php");
     
        	exit();
		}
		else {
			$mensajeaccesoincorrecto = "<p>El usuario o contraseña no son correctos, vuelva a introducirlos</p>";
        	 echo $mensajeaccesoincorrecto;
		}
	}
	mysqli_close($conexion);
	?>
</body>
</html>