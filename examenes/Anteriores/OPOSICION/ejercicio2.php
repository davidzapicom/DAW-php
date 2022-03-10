<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>
	<?php
	session_start();
	
	
		$_SESSION["connection"] = mysqli_connect("localhost", "consultor", "consultor", "oposicion");
	
	
	if (isset($_POST['cerrarsesion'])) {
		session_destroy();
		header("Location:ejercicio1.php");
	}
	$consulta = 'SELECT nombreP FROM `profesor` WHERE (dniP = "' . $_SESSION["dni"] . '" )';
	$consulta2 = 'SELECT codigocurso, nombrecurso, maxalumnos, fechaini, fechafin, numhoras, profesor FROM `curso` WHERE (profesor = "' . $_SESSION["dni"] . '" )';
	$consultaNombre = mysqli_query($_SESSION["connection"], $consulta);
	$consultaCurso = mysqli_query($_SESSION["connection"], $consulta2);
	$filaNombre = mysqli_fetch_assoc($consultaNombre);
	$horastotales=0;

	$_SESSION["nombreP"] = $filaNombre["nombreP"];
	echo '
		<div class="container">
			<div class="consulta">
				<form action="#" method="post">
					<div class="flex space-between">
						<p>Profesor: ' . $_SESSION["dni"] . ' Nombre: ' . $_SESSION["nombreP"] . '</p>
						<button type="submit" class="cerrar" name="cerrarsesion">Cerrar sesion</button>
					</div>
					
					<table>
						<thead>
							<th>CodigoCurso</th>
							<th>NombreCurso</th>
							<th>MaxAlumnos</th>
							<th>FechaIni</th>
							<th>FechaFin</th>
							<th>NumHoras</th>
							<th>Profesor</th>

						</thead>
						<tbody>
	';
	while ($fila = mysqli_fetch_array($consultaCurso)) {
		
		$horastotales=$horastotales+$fila["numhoras"];

		echo '
							<tr>
								<td> ' . $fila["codigocurso"] . '</td>
								<td> ' . $fila["nombrecurso"] . '</td>
								<td> ' . $fila["maxalumnos"] . ' </td>
								<td> ' . $fila["fechaini"] . '</td>
								<td> ' . $fila["fechafin"] . '</td>
								<td> ' . $fila["numhoras"] . '</td>
								<td> ' . $fila["profesor"] . ' </td>
								
							</tr>
		';
	}
	echo '
						</tbody>
					</table>
				</form>
			</div>
		</div>
	';
echo 'Total de horas impartidas: ' .$horastotales;

	?>
</body>