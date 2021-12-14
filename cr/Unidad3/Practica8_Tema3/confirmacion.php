<!DOCTYPE html>
<html>
<body>

<head>

<title>Confirmación</title>

<meta charset='UTF-8' />

<style>

	body {
		
	background-image: url("");
	background-color: #cccccc;
	background-size: cover;
	
	}

</style>

</head>

<body>

	<div>
	
	<h1>¡Gracias!</h1>
	
	<h1>¡Su pedido ya esta listo!</h1>

<?php

session_start();

if (isset($_POST['pagar'])){
	
	$total = 0;
	
    foreach ($_SESSION["carrito"] as $info => $dinerin) {
		
        if ($dinerin>0) {
			
			$precio=( $dinerin * $_SESSION["precio"][$info]);
			
			echo "<li>" . $_SESSION["productos"][$info]["Producto"] . " Cantidad: " . $dinerin . " Precio: " .$precio. "€";
			
			$total = $total + $precio;
       
        }
       
    }
	
	if ($total>0) {
	
		echo "<br><br>Precio total: " . $total . "€";
	
	}

}

session_destroy();
    ?>
	<p>¡Vuelva de nuevo!</p>
	
	<a href="login.php"> Volver al login </a>
	</div>
	
</body>
</html>