<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	session_start();
	
	$_SESSION["connection"] = mysqli_connect("localhost", "administrador", "administrador", "oposicion");
	$sessionE = "";
	$consulta = 'SELECT nombreA FROM `alumno` WHERE (dniA = "' . $_SESSION["dni"] . '" )';
	$consultaNombre = mysqli_query($_SESSION["connection"], $consulta);
	$filaNombre = mysqli_fetch_assoc($consultaNombre);
	$_SESSION["nombreA"] = $filaNombre["nombreA"];
	
		if (isset($_POST["introducir"])) {
				$comprobar='SELECT `nombrecurso`,`maxalumnos`,`fechaini`,`fechafin`,`numhoras`,`profesor` FROM `curso` WHERE codigocurso =  "' . $_POST["codcurso"] . '"';
				$dato = mysqli_query($_SESSION["connection"], $comprobar);

			if (mysqli_num_rows($dato) === 0) {
			
			$sessionE = "No existe el curso";

			} else {
			
			$introducir = "INSERT INTO `matricula` (dnialumno, codcurso, pruebaA, pruebaB, tipo, inscripcion) VALUES ('{$_SESSION["dni"]}', '{$_POST["codcurso"]}', '{$_POST["pruebaA"]}', '{$_POST["pruebaB"]}', '{$_POST["tipo"]}', '{$_POST["inscripcion"]}')";
			mysqli_query($_SESSION["connection"], $introducir);
			echo "Subida de datos correcta";

			}

			
		
		}else if (isset($_POST['cerrarsesion'])) {
			session_destroy();
			header("Location:ejercicio1.php");
		}
	?>
	<div class="container">
		<form class="formulario" action="#" method="post">
			<?php 

			if (isset($_POST['introducir'])) {
				$dni=$_SESSION['dni'];
				$codcurso=$_POST['codcurso'];
				$pruebaA=$_POST['pruebaA'];
				$pruebaB=$_POST['pruebaB'];
				$tipo=$_POST['tipo'];
				$inscripcion=$_POST['inscripcion'];
				$sessionErr = array();
				if ($codcurso== "") {
					array_push($sessionErr, "El campo CODIGO CURSO no puede estar vacio");
				}
				if ($pruebaA== "") {
					array_push($sessionErr, "El campo PRUEBA A no puede estar vacio");
				}
				if ($pruebaB== "") {
					array_push($sessionErr, "El campo PRUEBA B no puede estar vacio");
				}
				if ($tipo== "") {
					array_push($sessionErr, "El campo TIPO no puede estar vacio");
				}
				if ($inscripcion== "") {
					array_push($sessionErr, "El campo INSCRIPCION no puede estar vacio");
				}
				if (count($sessionErr)>0) {
					echo "<div class='error'>";
					for ($i=0; $i < count($sessionErr); $i++) { 
						echo "<li>".$sessionErr[$i]."<div>";
					}
				}echo "</div>";

			}

			?>
			<div class="flex space-between">
				<p><?php echo 'Alumno: ' . $_SESSION["dni"] . ' Nombre: ' . $_SESSION["nombreA"] ?></p>
				<button type="submit" class="cerrar" name="cerrarsesion">Cerrar sesion</button>
			</div>
			<p class="error"><?php echo $sessionE ?></p>

			<div class="form-group">
				<strong>DNI </strong>
				<input class="form-input" type="text" name="dni" value="<?php echo($_SESSION["dni"]) ?>" >
			</div>
			<div class="form-group">
				<strong>CODIGO CURSO </strong>
				<input class="form-input" type="text" name="codcurso" placeholder="">
				
			</div>
			<div class="form-group">
				<strong>PRUEBA A </strong>
				<input class="form-input" type="text" name="pruebaA" placeholder="">
			</div>
			<div class="form-group">
				<strong>PRUEBA B </strong>
				<input class="form-input" type="text" name="pruebaB" placeholder="">
			</div>
			<div class="form-group">
				<strong>TIPO </strong>
				<input class="form-input" type="text" name="tipo" placeholder="">
			</div>
			<div class="form-group">
				<strong>INSCRIPCION </strong>
				<input class="form-input" type="text" name="inscripcion" placeholder="">
			</div>
			<div class="form-group">
				<button type="submit" name="introducir">Introducir</button>
			</div>
		</form>
	</div>
</body>

</html>