<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
	session_start();
	if (!isset($_SESSION['nota'])) {
		$_SESSION['nota']=0;
	}
	?>
	<h2>Resgistro nueva película</h2>
	<form action="" method="POST">
		<fieldset>
			<legend>Registro</legend>
			<p>Título: <input type="text" name="tit" required="required"></p>
			<p>Año: <input type="number" name="anio" required="required" max="2020" min="1900"></p>
			<p>Director: <input type="text" name="director" required="required"></p>
			<p>Poster: <input type="url" name="poster" required="required"></p>
			<p>Alquilada: <input type="number" name="disponible" required="required" min="0" max="1"></p>
			<p>Sinopsis</p>
			<textarea name="sinopsis" placeholder="Escriba la sinopsis de la película" style="box-sizing: border-box; width: 350px; height: 200px; resize: none; overflow: auto;" required="required">
			</textarea>
			<p>Puntuación</p>
			<div style="height: 64px;">
				<?php
					if ($_SESSION['nota']>0) {
						for ($i=1; $i<=$_SESSION['nota']; $i++) {
				?>
				<img src="../estrella.jpg" height="32">
				<?php
						}
					}
				?>
			</div>
		</fieldset>
		<p><input type="submit" name="addPeli" value="Enviar"></p>
	</form>

	<form action="" method="POST" style="position: absolute; top: 625px; left: 25px;">
		<input type="submit" name="vot" value="Votar">
		<input type="submit" name="res" value="Quitar estrella">
	</form>

	<?php
	if (isset($_POST['vot'])) {
		if ($_SESSION['nota']<10) {
			$_SESSION['nota']++;
			header("Location:ejercicio2.php");
		}
	}

	if (isset($_POST['res'])) {
		if ($_SESSION['nota']>0) {
			$_SESSION['nota']--;
			header("Location:ejercicio2.php");
		}
	}

	if (isset($_POST['addPeli'])) {
		$conexion = mysqli_connect('localhost', 'root', '', 'video');
		if (mysqli_connect_errno()) {
			printf("Conexión fallida %s\n", mysqli_connect_error());
			exit();
		}
		$tit=$_POST['tit'];
		$anio=$_POST['anio'];
		$director=$_POST['director'];
		$poster=$_POST['poster'];
		$alquilada=$_POST['disponible'];
		$sinopsis=$_POST['sinopsis'];
		$nota=$_SESSION['nota'];
		$sql = "INSERT INTO peliculas VALUES (NULL,'$tit','$anio','$director','$poster',$alquilada,'$sinopsis',$nota);";
		if (mysqli_query($conexion, $sql)) {
			echo "Se ha registrado la película correctamente";
		}
		else {
			echo " <br> Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
		mysqli_close($conexion);
	}
	?>
</body>
</html>