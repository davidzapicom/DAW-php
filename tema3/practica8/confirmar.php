<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Felicidades!</h1>
        <h2>Usted acaba de adquirir:</h2>
<?php
    session_start();
    foreach ($_SESSION["productos"] as $indice => $producto) {
		if ($_SESSION["productos"][$indice]["cantidad"] > 0) {
			echo "<strong><li>" .$_SESSION["productos"][$indice]["cantidad"]."  ".$_SESSION["productos"][$indice]["Producto"]. "</li></strong>";
		}
	}
    echo "<h3><strong>TOTAL: " .$_SESSION['total']. "€</strong></h3>";
    echo "<h2>Gracias por su compra.</h2>";
    session_destroy();
?>
    </body>
</html>