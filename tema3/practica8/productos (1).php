<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">

		body{
			width: 1000px;
			height: 1000px;
			margin: auto;
		}

		section{
			border: 5px solid #4483F7;
			width: 600px;
			height: 700px;
			margin-top: 20px;
			padding-top: 20px;
			border-radius: 10px;
			float: right;
		}

		h2{
			text-align: center;
			color: darkblue;
		}


		.cajas{
			float: left;
			padding-left: 40px;

		}

		aside {
			float: right;
			width: 300px;
			height: 680px;
			margin-top: 20px;
			margin-left: 30px;
			padding: 15px;				
			background: #95F08C;
			box-shadow: 0px 2px 5px #1c1a19;
			border-radius: 10px;
			font-family: sans-serif;
			text-align: center;
			color: black;
			font-size: 20px;
		}

		button {
			border-radius: 10px;
			margin: 5px ;
			font-size: 15px;

		}

	</style>
</head>
<body>
	<?php
		
		session_start();
		if (isset($_POST['boton1'])) {
		$_SESSION['nombre']=$_POST['nombre'];
		
	}
		
		echo "<h2>Bienvenido/a  a AsturMark ".$_SESSION['nombre']."</h2>";

		if (!isset($_SESSION["productos"])) {
			
		
		$_SESSION["productos"]=array(
			"Televisor" => array(
				"Producto" => "Televisor",
				"Descripcion" => "22 pulgadas",
				"Precio" => 210,
				"Cantidad" => 0
			),

			"Móvil" => array(
				"Producto" => "Móvil",
				"Descripcion" => "4G",
				"Precio" => 300,
				"Cantidad" => 0
			),

			"MP4" => array(
				"Producto" => "MP4",
				"Descripcion" => "20Gb",
				"Precio" => 13,
				"Cantidad" => 0
				
			),

			"Ratón" => array(
				"Producto" => "Ratón",
				"Descripcion" => "6000dpi",
				"Precio" => 20,
				"Cantidad" => 0
				
			),

			"Alfombrilla" => array(
				"Producto" => "Alfombrilla",
				"Descripcion" => "Negra",
				"Precio" => 30,
				"Cantidad" => 0
				
			),

			"USB" => array(
				"Producto" => "USB",
				"Descripcion" => "2Gb",
				"Precio" => 5,
				"Cantidad" => 0
				
			)
		);
	}
		
		if (isset($_POST['agregar'])) {
			$_SESSION['productos'][$_POST['agregar']]["Cantidad"]++;
			
		}


		if (isset($_POST['quitar'])) {
			$_SESSION['productos'][$_POST['quitar']]["Cantidad"]--;
		}
		
	?>

		<aside>
			<header>
				<h2>El carrito de la compra</h2>
			</header>
			<?php
			$total=0;
				foreach ($_SESSION["productos"] as $indice => $producto) {
					if ($_SESSION["productos"][$indice]["Cantidad"]>0) {
			echo $_SESSION["productos"][$indice]["Cantidad"]."  ".$_SESSION["productos"][$indice]["Producto"];
			echo "<br/>";
		$total = $total+($_SESSION['productos'][$indice]["Cantidad"]*$_SESSION['productos'][$indice]["Precio"]);
			}

		}
		echo "<strong>Total: ".$total."€</strong>";
		echo "<br/><br/>";
			?>
			<form action="confirmacion.php" method="POST">
				<button style="background-color: red; width: 200px; height: 70px;" type="submit" name="boton"><strong>Confirmar compra</strong></button>
			</form>
		</aside>

		<section>

			<?php

				echo'<form action="#" method="POST">';
					$i=0;
    				foreach ($_SESSION["productos"] as $indice => $producto) {
		        echo '<div class="cajas">';
		        		$i++;
		        ?>
		        	<img src= '<?php echo $i."jpg" ?>' width=100 height=100>
		        <?php
		        	echo '
		                Producto: <strong>'.$_SESSION["productos"][$indice]["Producto"].'</strong><br/><br/>
		                Descripcion: <strong>'.$_SESSION["productos"][$indice]["Descripcion"].'</strong><br/><br/>
		                Precio: <strong>'.$_SESSION["productos"][$indice]["Precio"].'€</strong><br/><br/>
		                <button style="background-color: yellowgreen;" type="submit" name="agregar" value="'.$indice.'">Agregar</button>
		                <button style=" background-color: orange;" type="submit" name="quitar" value="'.$indice.'">Quitar</button>
		                <br/>
		            </div>';

		    }
		    echo '</form>';
		
			?>
		
		</section>
</body>
</html>
