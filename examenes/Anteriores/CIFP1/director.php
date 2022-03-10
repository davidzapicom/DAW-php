<!DOCTYPE html>
<html>
<head>
	<title>DIRECTOR</title>
	<p><b>DIRECTOR</b></p>

	<?php 
		session_start();

		$_SESSION["user"];
		$_SESSION["pass"];
		$_SESSION["rol"];

		echo 'Buenos días, '.$_SESSION["user"];
		echo '<br><a href="index.html" name="cerrar">Cerrar Sesion</a>';

		if (isset($_POST['cerrar'])) {
			session_destroy();
			header('Location: index.html');
		}
		
	?>

</head>
<body>
	<form action="registrar.php" method="post">
		<br><br><input type="submit" name="registrar" value="Registrar alumno">
	</form><br>
	
		
</body>
</html>