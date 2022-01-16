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
	$_SESSION["connection"] = mysqli_connect("localhost", "consultor", "consultor", "ventas");
	$consulta = 'SELECT * FROM `articulos`';
	$consultaArticulo = mysqli_query($_SESSION["connection"], $consulta);
	echo '<div class="container">';
	echo '<div class="consulta">';
	echo '<p>Conectado el usuario ' . $_SESSION["usuario"] . ' con el rol ' . $_SESSION["rol"] . '</p>';
	while ($fila = mysqli_fetch_array($consultaArticulo)) {
		echo '<table>';
		echo "<tr><td>ID: </td>";
		echo "<td>" . $fila["id_articulo"] . "</td></tr>";

		echo "<tr><td>Descripcion: </td>";
		echo "<td>" . $fila["descripcion"] . "</td></tr>";

		echo "<tr><td>Precio: </td>";
		echo "<td>" . $fila["precio"] . "</td></tr>";

		echo "<tr><td>Caracteristicas: </td>";
		echo "<td>" . $fila["caracteristicas"] . "</td></tr>";
		echo '</table>';
	}
	echo '</div>';
	echo '</div>';
	?>
</body>

</html>