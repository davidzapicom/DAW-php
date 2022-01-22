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
	$sessionErr = "";
	if ($_SESSION["rol"] === "consultor") {
		$_SESSION["connection"] = mysqli_connect("localhost", "consultor", "consultor", "ventas");
		$consulta = 'SELECT * FROM `articulos`';
		$consultaArticulo = mysqli_query($_SESSION["connection"], $consulta);
		if (!isset($_SESSION["cesta"])) {
			$_SESSION["cesta"] = array();
		}
	} else {
		$sessionErr = "No eres consultor";
	}

	if (isset($_POST['cerrarsesion'])) {
		session_destroy();
		header("Location:index.php");
	} else if (isset($_POST["añadir"])) {
		// Buscar si el producto ya esta en el carrito
		$posicionEnElCarrito = array_search($_POST["añadir"], array_column($_SESSION["cesta"], 0));
		if ($posicionEnElCarrito !== false) {
			$_SESSION["cesta"][$posicionEnElCarrito][3]++;
		} else {
			array_push($_SESSION["cesta"], [$_POST["añadir"], $_POST["descripcion"], $_POST["precio"], 1]);
		}
	} else if (isset($_POST["quitar"])) {
		$posicionEnElCarrito = array_search($_POST["quitar"], array_column($_SESSION["cesta"], 0));
		$_SESSION["cesta"][$posicionEnElCarrito][3]--;
		if ($_SESSION["cesta"][$posicionEnElCarrito][3] === 0) {
			if ($posicionEnElCarrito === 0) {
				array_shift($_SESSION["cesta"]);
			} else {
				array_splice($_SESSION["cesta"], $posicionEnElCarrito, $posicionEnElCarrito);
			}
		}
	} else if (isset($_POST["comprar"])) {
		if ($_SESSION["rol"] === "consultor") {
			$_SESSION["connection"] = mysqli_connect("localhost", "consultor", "consultor", "ventas");
			$horaActual = date('Y-m-d H:i:s');
			foreach ($_SESSION["cesta"] as $indice => $producto) {
				$introducir = "INSERT INTO `compras` (id_usuario, id_articulo, fecha, cantidad, precio_unitario) VALUES ('{$_SESSION["id_usuario"]}', '{$producto[0]}', '{$horaActual}', '{$producto[3]}', '{$producto[2]}')";
				$introducirCompra = mysqli_query($_SESSION["connection"], $introducir);
			}
			// Vaciar el carrito despues de comprar
			$_SESSION["cesta"] = array();
		}
	}
	echo '
		<div class="container comprar">
			<div class="consulta">
				<form action="#" method="post">
					<div class="flex space-between">
						<p>Conectado el usuario ' . $_SESSION["usuario"] . ' con el rol ' . $_SESSION["rol"] . '</p>
						<button type="submit" class="cerrar" name="cerrarsesion">Cerrar sesion</button>
					</div>
					<p class="error">' . $sessionErr . '</p>
					<table>
						<thead>
							<th>ID</th>
							<th>Descripcion</th>
							<th>Precio</th>
							<th>Caracteristicas</th>
						</thead>
						<tbody>
	';
	while ($fila = mysqli_fetch_array($consultaArticulo)) {
		echo '
							<tr>
								<td>' . $fila["id_articulo"] . '</td>
								<td>' . $fila["descripcion"] . '</td>
								<td>' . $fila["precio"] . '</td>
								<td>' . $fila["caracteristicas"] . '</td>
								<td>
									<form action="#" method="post">
										<input type="hidden" name="descripcion" value="' . $fila["descripcion"] . '"/>
										<input type="hidden" name="precio" value="' . $fila["precio"] . '"/>
										<input type="hidden" name="caracteristicas" value="' . $fila["caracteristicas"] . '"/>
										<button type="submit" name="añadir" value="' . $fila["id_articulo"] . '">Añadir</button>
									</form>
								</td>
							</tr>
		';
	}
	echo '
						</tbody>
					</table>
				</form>
			</div>
			<div class="carrito">
				<div class="productosCarrito">
	';
	$total = 0;
	$vacio = true;
	foreach ($_SESSION["cesta"] as $indice => $producto) {
		if ($producto[3] > 0) {
			$vacio = false;
			echo '
					<div class="prodCarrito">
						<p class="carritoName">' . $producto[1] . '</p>
						<div class="carritoDesc">
							<p>' . $producto[3] . ' unidades</p>
							<p>' . ($producto[2] * $producto[3]) . '€</p>
						</div>
						<div class="carritoDesc">
							<form action="#" method="post">
								<button type="submit" class="secondary" name="quitar" value="' . $producto[0] . '">Quitar</button>
							</form>
						</div>
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
		echo '
					<p>Carrito vacio</p>
		';
	} else {
		echo '
					<p>Total: ' . $total . '€</p>
					<form action="#" method="post">
						<button type="submit" name="comprar">Comprar</button>
					</form>
		';
	}
	echo '
				</div>
			</div>
		</div>
	';
	?>
</body>