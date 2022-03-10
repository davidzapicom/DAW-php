<!DOCTYPE html>
<html>
<head>
	<title>CONSULTAR</title>
	
	<?php 
		session_start();

		$_SESSION["user"];
		$_SESSION["pass"];
		$_SESSION["rol"];
		$_SESSION["id"];

		$conexion = mysqli_connect('localhost',$_SESSION["rol"], $_SESSION["rol"],'instituto');

		if ($conexion == false) {
			die("Conexion fallida: " . mysqli_connect_error());
		}
		
		echo 'Notas de '.$_SESSION['user'].'<br><br>';
		echo '<a href="index.html" name="cerrar">Cerrar Sesion</a><br><br>';

		if (isset($_POST['cerrar'])) {
			session_destroy();
			header('Location: index.html');
		}
		
		$resultado = mysqli_query($conexion,"SELECT * FROM notas WHERE alumno='$_SESSION[id]'");//

		while ($notas = mysqli_fetch_assoc($resultado)) {

	?>
			Asignatura:<?php echo $notas['asignatura']?><br>
			Fecha:<?php echo $notas['fecha']?><br>
			Nota:<?php echo $notas['nota']?><br><br>
			
	<?php

		}

		mysqli_close($conexion);
		
	?>

</head>
<body>
	
		
</body>
</html>