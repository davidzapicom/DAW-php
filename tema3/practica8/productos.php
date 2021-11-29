<html>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        body {
            display: inline-block;
            font-family: 'Outfit', sans-serif;
            color: #142F43;
            background-color: #F0E9D2;
        }
        .contenedor{
            width: 69%;
            height: 600px;
            border: 2px solid #142F43;
            float: left;
        }
        .box{
            float: left;
            width: 200px;
            height: 150px;
            margin-left: 20px;
            margin-bottom: 20px; 
        }
        header h1, aside h1{
            color: #F0E9D2;
            text-align: center;
            text-transform: uppercase;
            padding-left: 10px;
            
        }
        header {
            text-align: center;
            display: flex;
            justify-content: center;
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
            background-color: #142F43;
        }
        footer {
            font-family: 'VT323', monospace;
            display: flex;
            background-color: #142F43;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            width: 100%;
            justify-content: center;
            align-items:center;
            color: #F0E9D2;
            }
        aside {
            width: 29%;
            float: right;
            height: 584px;
            background-color: #142F43;
            margin: 0 auto;
            padding: 10px;
        }
        aside button {
            color: #142F43;
            background-color: #F0E9D2;
        }
        aside button.esp {
            position: absolute;
            bottom: 160;
            right: 20;
        }
        button{
            padding: 5px;
            border-radius: 20px;
            background-color: #142F43;
            color: #F0E9D2;
        }
        button a {
            text-decoration: none;
            color: #142F43;
        }
    </style>
 </html>
<?php
    session_start();
    $_SESSION["nombre"] = $_POST["nombre"];
    if (!isset($_SESSION["productos"])) {
		$_SESSION["productos"] = array(
			"Televisor" => array("Producto" => "Televisor", "Descripcion" => "22 pulgadas", "Precio" => 210, "Cantidad" => 0),
			"Móvil" => array("Producto" => "Móvil", "Descripcion" => "4G", "Precio" => 300, "Cantidad" => 0),
			"MP4" => array("Producto" => "MP4", "Descripcion" => "20Gb", "Precio" => 13, "Cantidad" => 0),
            "Ratón" => array("Producto" => "Ratón", "Descripcion" => "6000dpi", "Precio" => 20, "Cantidad" => 0),
            "Alfombrilla" => array("Producto" => "Alfombrilla", "Descripcion" => "Negra", "Precio" => 30, "Cantidad" => 0),
            "USB" => array("Producto" => "USB", "Descripcion" => "2Gb", "Precio" => 5, "Cantidad" => 0),
		);
	}


    if (isset($_POST['agregar'])) {
        $_SESSION['productos'][$_POST['agregar']]["Cantidad"]++;
        
    }


    if (isset($_POST['quitar'])) {
        $_SESSION['productos'][$_POST['quitar']]["Cantidad"]--;
    }
    
    
    
    
    
    
    
    
    echo "<header>";
    echo "<h1><i class='fas fa-store'></i> TIENDA ONLINE <i class='fas fa-store'></i></h1>";
    echo "</header>";
    echo "<body>";
    echo "<div class='contenedor'>"; 
    echo "<h1 style='padding-left: 20px;'>Bienvenid@ " .$_SESSION["nombre"]. "!</h1>";

    foreach ($productos as $propiedad) { 
        echo "<div class='box'>";
        echo "<p>Producto: <strong>".$propiedad['Producto']. "</strong></p>";
        echo "<p>Descripcion: <strong>".$propiedad['Descripcion']. "</strong></p>";
        echo "<p>Precio: <strong>".$propiedad['Precio']. "€</strong></p>";
        echo '<button type="submit" name="boton" value="$propiedad["Producto"]">Añadir</button>';
        echo "</div>";
    } 
    
    echo "</div>";


    echo "<aside>";
    echo "<h1><i class='fas fa-shopping-bag'></i> carrito</h1>";
    $total = 0;
	foreach ($_SESSION["productos"] as $indice => $producto) {
		if ($_SESSION["productos"][$indice]["Cantidad"]>0) {
		    echo $_SESSION["productos"][$indice]["Cantidad"]."  ".$_SESSION["productos"][$indice]["Producto"];
		    echo "<br/>";
		    $total = $total+($_SESSION['productos'][$indice]["Cantidad"]*$_SESSION['productos'][$indice]["Precio"]);
		}
	}
    
    echo '<button class="esp" type="submit"><a href="confirmar.php">Continuar</a> <i class="fas fa-chevron-right"></i></button>';
    echo "</aside>";
    echo "<footer>";
    echo "<h3 class='left'>Proyecto carrito PHP | David Zapico y Daniel Martinez</h3>";
    echo "</footer>";
    echo "</body>";  
?>
    