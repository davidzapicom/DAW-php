<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR</title>
	<p><b>INSERTAR ALUMNOS</b></p>

	<?php 
		session_start();

		$_SESSION["user"];
		$_SESSION["pass"];
		$_SESSION["rol"];

		echo $_SESSION["user"].', se ha validado como '.$_SESSION["rol"];
		echo '<br><a href="index.html" name="cerrar">Cerrar Sesion</a>';

		
		if (isset($_POST['registrar'])) {

			header('Location: registrar.php');
		}

		if (isset($_POST['insertar'])) {

			$id = $_POST['id'];
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];

			$conexion = mysqli_connect('localhost',$_SESSION["rol"], $_SESSION["rol"],'instituto');

			if ($conexion == false) {
				die("Conexion fallida: " . mysqli_connect_error());
			}
			
			$consulta1 = "INSERT INTO alumnos (id, nombre, apellidos) VALUES ('', '$nombre', '$apellidos')";
			$consulta2 = "INSERT INTO usuarios (idusuario, usuario, password, rol) VALUES ('', '$usuario', '$password', 'alumno')";

			$resultado1 = mysqli_query($conexion,$consulta1);
			$resultado2 = mysqli_query($conexion,$consulta2);

			if ($resultado1 && $resultado2) {
				echo '<br>¡Alumno agregado con éxito!';
	        }else{
	      		echo "Error: ".$consulta1."<br>".mysqli_error($conexion);
	      		echo "<br>Error: ".$consulta2."<br>".mysqli_error($conexion);
			}
		}
		
	?>

</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

		<br><br>
		ID <input type="text" name="id"><br><br>
		USUARIO <input type="text" name="usuario"><br><br>
		PASSWORD <input type="password" name="password"><br><br>
		NOMBRE <input type="text" name="nombre"><br><br>
		APELLIDOS <input type="text" name="apellidos"><br><br>
		<input type="submit" name="insertar" value="Insertar">

	</form><br>
	<input type="button" name="cerrar" value="Cerrar sesión">
		
</body>
</html>