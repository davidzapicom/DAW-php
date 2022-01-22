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
	$sessionErr = $consultaComprasErr = "";
	if ($_SESSION["rol"] === "consultor") {
		$_SESSION["connection"] = mysqli_connect("localhost", "consultor", "consultor", "ventas");
	} else {
		$sessionErr = "No puedes consultar";
	}
	$hoy = date("Y-m-d");
	echo '
		<div class="container">
			<div class="consulta">
				<form action="#" method="post">
					<div class="flex space-between">
						<p>Conectado el usuario ' . $_SESSION["usuario"] . ' con el rol ' . $_SESSION["rol"] . '</p>
						<button type="submit" class="cerrar" name="cerrarsesion">Cerrar sesion</button>
					</div>
					<p class="error">' . $sessionErr . '</p>
					<div>
						Desde: <input type="date" name="desde" max="' . $hoy . '">
						Hasta: <input type="date" name="hasta" max="' . $hoy . '">
						<button type="submit" name="consultar">Consultar</button>
					</div>
	';
	if (isset($_POST['cerrarsesion'])) {
		session_destroy();
		header("Location:index.php");
	} else if (isset($_POST['consultar'])) {
		if (($_POST["desde"] === "") && ($_POST["hasta"] === "")) {
			$desde = "0000-00-00 00:00:00";
			$hasta =  $hoy . " 23:59:59";
		} else if (($_POST["desde"] === "") || ($_POST["hasta"] === "")) {
			$consultaComprasErr = 'Introduce ambas fechas o deja ambas vacias.';
		} else if ($_POST["desde"] > $_POST["hasta"]) {
			$consultaComprasErr = '"Hasta" debe ser posterior a "Desde".';
		} else {
			$desde = $_POST["desde"] . " 00:00:00";
			$hasta = $_POST["hasta"] . " 23:59:59";
		}

		if ($consultaComprasErr === "") {
			$selectCompras = 'SELECT * FROM compras WHERE (fecha BETWEEN "' . $desde . '" AND "' . $hasta . '") AND (idusuario = "' . $_SESSION["idusuario"] . '")';
			$consultarCompras = mysqli_query($_SESSION["connection"], $selectCompras);
			if (mysqli_num_rows($consultarCompras) === 0) {
				$consultaComprasErr = $_SESSION["usuario"] . ", no ha realizado ninguna compra entre esas fechas.";
			}
		}

		if ($consultaComprasErr !== "") {
			echo '
					<p class="error">' . $consultaComprasErr . '</p>
			';
		} else {

			echo '
					<table>
						<thead>
							<th>Fecha</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Cantidad</th>
						</thead>
						<tbody>
			';
			while ($fetch = mysqli_fetch_array($consultarCompras)) {
				$selectArticulos = 'SELECT descripcion FROM articulos WHERE idarticulo = "' . $fetch["idarticulo"] . '"';
				$consultaNombreArticulo = mysqli_query($_SESSION["connection"], $selectArticulos);
				$nombreArticulo = mysqli_fetch_assoc($consultaNombreArticulo)["descripcion"];
				echo '
							<tr>
								<td> ' . $fetch["fecha"] . '</td>
								<td> ' . $nombreArticulo . '</td>
								<td> ' . $fetch["precio_unitario"] . ' €</td>
								<td> ' . $fetch["cantidad"] . '</td>
							</tr>
				';
			}
			echo '
						</tbody>
					</table>
			';
		}
	}
	echo '
				</form>
			</div>
		</div>
	';
	?>
</body>
