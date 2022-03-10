<!DOCTYPE html>
<html>
<head>
	<title>ALUMNO</title>
	<p><b>ALUMNO</b></p>

	<?php 
		session_start();

		$_SESSION["user"];
		$_SESSION["pass"];
		$_SESSION["rol"];
		$_SESSION["id"];

		echo 'Buenos días, '.$_SESSION["user"];
		echo '<br><a href="index.html" name="cerrar">Cerrar Sesion</a>';

		if (isset($_POST['cerrar'])) {
			session_destroy();
			header('Location: index.html');
		}

	?>

</head>
<body>
	<form action="consultar.php" method="post">
		
		<br><br><input type="submit" name="consultar" value="Consultar notas">

	</form><br>
</body>
</html>