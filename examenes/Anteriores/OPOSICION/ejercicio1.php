<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>
	<?php
	session_start();
	$userErr = "";
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$_SESSION["dni"] = $_POST["dni"];
		

		$enlace = mysqli_connect("localhost", "consultor", "consultor", "oposicion");
		$dniA = 'SELECT `dniA`,`nombreA`,`apellido1A`,`apellido2A`,`direccionA`,`sexoA`,`fechanacA` FROM `alumno` WHERE dniA = "' . $_SESSION["dni"] . '"';
		$dniP = 'SELECT `dniP`,`nombreP`,`apellido1P`,`apellido2P`,`direccionP`,`tituloP`,`sueldoP` FROM `profesor` WHERE dniP = "' . $_SESSION["dni"] . '"';
		$datoA = mysqli_query($enlace, $dniA);
		$datoP = mysqli_query($enlace, $dniP);
		



		if (mysqli_num_rows($datoA) === 0) {
			if (mysqli_num_rows($datoP) === 0) {
			$userErr = "DNI incorrecto";
		} else {
			
			header("Location: ejercicio2.php");
		}
		} else {
			
			header("Location: ejercicio3.php");
		}

		mysqli_close($enlace);
	}
	?>
	<div class="container">
		<form class="formulario" action="#" method="post">
			<div class="form-group">
				<strong>DNI </strong>
				<input class="form-input" type="text" name="dni" placeholder="">
				<p class="error"><?php echo $userErr ?></p>
			</div>
			
			<div class="form-group">
				<button type="submit">ENTRAR</button>
			</div>
			
		</form>
	</div>
</body>

</html>