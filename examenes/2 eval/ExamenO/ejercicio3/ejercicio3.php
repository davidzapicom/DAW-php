<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<h2>Listado de películas disponibles ordenadas por nota</h2>
	<div style="display: flex; flex-flow: row wrap; justify-content: space-around;">
	<?php
		$conexion = mysqli_connect('localhost', 'root', '', 'video');
		if (mysqli_connect_errno()) {
			printf("Conexión fallida %s\n", mysqli_connect_error());
			exit();
		}
		$sql="SELECT title, year, director, nota FROM peliculas WHERE rented=0 ORDER BY nota DESC;";
		$result = mysqli_query ($conexion, $sql);

		if(mysqli_num_rows($result) > 0) {
			while ($registro = mysqli_fetch_row($result)) {
	?>
		<div style="border: 1px solid black; background-color: silver; margin: 10px 0px; width: 300px;">
			<table>
				<tr>
					<th>Título</th>
					<td><?php echo $registro[0]; ?></td>
				</tr>
				<tr>
					<th>Año</th>
					<td><?php echo $registro[1]; ?></td>
				</tr>
				<tr>
					<th>Director</th>
					<td><?php echo $registro[2]; ?></td>
				</tr>
				<tr>
					<th>Nota</th>
					<td>
						<svg width="100" height="20">
							<rect style="fill: yellow" x="0" y="0" height="20" width="<?php echo $registro[3]*10; ?>"></rect>
						</svg>
						<?php echo $registro[3]; ?>
					</td>
				</tr>
			</table>
		</div>
	<?php
	        }
	    }
	    else {
	    	echo "No hay películas disponibles";
	    }
	    mysqli_close($conexion);
	?>
	</div>
</body>
</html>