<?php 
	session_start();

	 $usuario = $_POST['user'];
	 $password = $_POST['pass'];

	//El host en el que se localiza nuestra base de datos
	/*$host = 'localhost';
	//El usuario con el que accederemos
	$usuario_bd = 'administrador';
	//La password del usuario
	$password_bd = '';
	//Nombre de la tabla a la que accedemos
	$nombre_bd = 'ventas';*/
	//Creamos una conexión a la BD y guardamos un enlace a la misma
	//$conexion = mysqli_connect('$host','$usuario_bd','','$nombre_bd');

	$conexion = mysqli_connect('localhost','root','','instituto'); //Creamos conexion

	if ($conexion == false) {
		die("Conexion fallida: " . mysqli_connect_error());
	} //Si no conecta -> mensaje de error

	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'"; 

	$resultado = mysqli_query($conexion, $consulta); //Conectamos con la BD y comprobamos si existe
	
	if (mysqli_num_rows($resultado) > 0) {
		// mysql_num_rows <- esta funcion me imprime el numero de registro que encuentra 
		// si el numero es igual a 0 es porque el registro no existe
		$usuarios = mysqli_fetch_assoc($resultado); //Devuelve una fila de resultado como matriz asociativa
		
		mysqli_close($conexion); //Cerramos conexion como root y la iniciamos como usuario introducido

		$conexion = mysqli_connect('localhost',$usuarios["rol"], $usuarios["rol"], 'instituto'); //Creamos conexion

		$_SESSION["user"] = $usuario;
		$_SESSION["pass"] = $password;
		$_SESSION["rol"] = $usuarios["rol"];
		$_SESSION["id"] = $usuarios["idusuario"];

		if ($_SESSION['rol'] == 'director') {

			header('Location: director.php');

		}else if ($_SESSION['rol'] == 'alumno') {

			header('Location: alumno.php');
		}

	}else{
		echo 'El usuario introducido no existe, validese de nuevo';
		echo "</br><a href='index.html'>Volver a la pagina anterior</a>";
	}
?>