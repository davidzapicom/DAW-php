<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<?php
    session_start();
    if (isset($_POST['boton'])){
        $_SESSION["nombre"] = $_POST["nombre"];
    }
    if (!isset($_SESSION["productos"])) {
		$_SESSION["productos"] = array(
			"Televisor" => array("Producto" => "Televisor", "Descripcion" => "22 pulgadas", "Precio" => 210, "cantidad" => 0),
			"Móvil" => array("Producto" => "Móvil", "Descripcion" => "4G", "Precio" => 300, "cantidad" => 0),
			"MP4" => array("Producto" => "MP4", "Descripcion" => "20Gb", "Precio" => 13, "cantidad" => 0),
            "Ratón" => array("Producto" => "Ratón", "Descripcion" => "6000dpi", "Precio" => 20, "cantidad" => 0),
            "Alfombrilla" => array("Producto" => "Alfombrilla", "Descripcion" => "Negra", "Precio" => 30, "cantidad" => 0),
            "USB" => array("Producto" => "USB", "Descripcion" => "2Gb", "Precio" => 5, "cantidad" => 0),
		);
	}
    if (isset($_POST['anadir'])) {
        $_SESSION['productos'][$_POST['anadir']]["cantidad"]++; 
    }
    if (isset($_POST['quitar'])) {
        if ($_SESSION['productos'][$_POST['quitar']]["cantidad"] != 0) {
            $_SESSION['productos'][$_POST['quitar']]["cantidad"]--; 
        }
    }
?>
    <header>
        <h1><i class='fas fa-store'></i> TIENDA ONLINE <i class='fas fa-store'></i></h1>
    </header>
    <body>
        <div class='contenedor'>
        <?php
        echo "<h1 style='padding-left: 20px;'>Bienvenid@ "  .$_SESSION['nombre']. "!</h1>";
        echo'<form action="#" method="POST">';
        foreach ($_SESSION["productos"] as $indice => $producto) {
        echo '<div class="box">';
            echo '
                Producto: <span>'.$_SESSION["productos"][$indice]["Producto"].'</span><br/><br/>
                Descripcion: <strong>'.$_SESSION["productos"][$indice]["Descripcion"].'</strong><br/><br/>
                Precio: <strong>'.$_SESSION["productos"][$indice]["Precio"].'€</strong><br/><br/>
                <button type="submit" name="anadir" value="'.$indice.'">Añadir</button>
                <button type="submit" name="quitar" value="'.$indice.'">Quitar</button>
                <br/>
            </div>';
        }
        echo '</form>';
        ?>
    </div>
    <aside>
    <h1><i class="fas fa-shopping-bag"></i> carrito</h1>
    <?php
        $total = 0;
		foreach ($_SESSION["productos"] as $indice => $producto) {
			if ($_SESSION["productos"][$indice]["cantidad"] > 0) {
			    echo "<strong><li>" .$_SESSION["productos"][$indice]["cantidad"]."  ".$_SESSION["productos"][$indice]["Producto"]. "</li></strong>";
		        $total = $total + ($_SESSION['productos'][$indice]["cantidad"] * $_SESSION['productos'][$indice]["Precio"]);
			}
		}
		echo "<h3><strong>TOTAL: ".$total."€</strong></h3>";
        if ($total != 0) {
            echo '<button class="esp" type="submit"><a href="confirmar.php">Continuar</a> <i class="fas fa-chevron-right"></i></button>';
        }
        $_SESSION["total"] = $total;
	?>
    </aside>
    <footer>
    <h3>Proyecto carrito PHP | David Zapico y Daniel Martinez</h3>
    </footer>
    </body>
</html>