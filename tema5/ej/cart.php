<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
	session_start();
	$sessionErr = "";
    echo '<h3>Hola ' .$_SESSION["name"]. ' ' .$_SESSION["rol"]. '.</h3>';
    echo '<a class="boton" href="consult.php">Compras</a><br/>';
    echo '<a class="boton" href="logout.php">Cerrar sesión</a><br/>';
	if ($_SESSION["rol"] === "consultor") {
		$_SESSION["con"] = mysqli_connect("localhost", "consultor", "", "ventas");
		$consulta = 'SELECT * FROM articulos';
		$consultaArticulo = mysqli_query($_SESSION["con"], $consulta);
		if (!isset($_SESSION["cesta"])) {
			$_SESSION["cesta"] = array();
		}
	} else {
		$sessionErr = "No eres consultor";
	}

	if (isset($_POST["añadir"])) {
		// Buscar si el producto ya esta en el carrito
		$posCarrito = array_search($_POST["añadir"], array_column($_SESSION["cesta"], 0));
		if ($posCarrito !== false) {
			$_SESSION["cesta"][$posCarrito][3]++;
		} else {
			array_push($_SESSION["cesta"], [$_POST["añadir"], $_POST["descripcion"], $_POST["precio"], 1]);
		}
	} else if (isset($_POST["quitar"])) {
		$posCarrito = array_search($_POST["quitar"], array_column($_SESSION["cesta"], 0));
		$_SESSION["cesta"][$posCarrito][3]--;
		if ($_SESSION["cesta"][$posCarrito][3] === 0) {
			if ($posCarrito === 0) {
				array_shift($_SESSION["cesta"]);
			} else {
				array_splice($_SESSION["cesta"], $posCarrito, $posCarrito);
			}
		}
	} else if (isset($_POST["comprar"])) {
		if ($_SESSION["rol"] === "consultor") {
			$_SESSION["con"] = mysqli_connect("localhost", "consultor", "consultor", "ventas");
			$horaActual = date('Y-m-d H:i:s');
			foreach ($_SESSION["cesta"] as $indice => $producto) {
				$sentencia = "INSERT INTO compras (idusuario, idarticulo, fecha, cantidad, precio_unitario) VALUES ('{$_SESSION["idusuario"]}', '{$producto[0]}', '{$horaActual}', '{$producto[3]}', '{$producto[2]}')";
				$introducirCompra = mysqli_query($_SESSION["con"], $sentencia);
			}
			echo '<p>¡' .$_SESSION["name"]. ', se ha realizado correctamente la compra!</p>';
			// Vaciar el carrito despues de comprar
			$_SESSION["cesta"] = array();
		}
	}
	?>
		<div class="container">
			<div class="consulta">
				<form action="#" method="post">
					<div class="flex space-between">
					</div>
					<p class="error"><?php $sessionErr ?></p>
					<table>
						<thead>
							<th>ID</th>
							<th>Descripcion</th>
							<th>Precio</th>
							<th>Caracteristicas</th>
						</thead>
						<tbody>
	<?php
	while ($fila = mysqli_fetch_array($consultaArticulo)) {
		echo '
							<tr>
								<td>' .$fila["idarticulo"]. '</td>
								<td>' .$fila["descripcion"]. '</td>
								<td>' .$fila["precio"]. '</td>
								<td>' .$fila["caracteristicas"]. '</td>
								<td>
									<form action="#" method="post">
										<input type="hidden" name="descripcion" value="' . $fila["descripcion"] . '"/>
										<input type="hidden" name="precio" value="' . $fila["precio"] . '"/>
										<input type="hidden" name="caracteristicas" value="' . $fila["caracteristicas"] . '"/>
										<button type="submit" class="boton" name="añadir" value="' . $fila["idarticulo"] . '">+</button>
									</form>
								</td>
							</tr>';
	}
	?>
						</tbody>
					</table>
				</form>
			</div>

			<aside>
			<div class="carrito">
	<?php
	$total = 0;
	$vacio = true;
	foreach ($_SESSION["cesta"] as $indice => $producto) {
		if ($producto[3] > 0) {
			$vacio = false;
			echo '
					<div class="carrito">
							<form action="#" method="post">
								<p>' . $producto[1] . '</p>
								<p>' . $producto[3] . ' unidades</p>
								<p>' . ($producto[2] * $producto[3]) . '€</p>
								<button type="submit" class="boton" name="quitar" value="' . $producto[0] . '">-</button>
							</form>
					</div>
			';
			$total += ($producto[2] * $producto[3]);
		}
	}
	echo '
				</div>
				<div class="total">
	';
	if ($vacio) {
		echo '<p>El carrito está vacio.</p>';
	} else {
		echo '<br/><form action="#" method="post">
				Total: ' . $total . '€
					<button type="submit" class="boton" name="comprar">Comprar</button>
				</form>';
	}
	?>
              </div>
		</div>
		</aside>
	
</body>
</html>