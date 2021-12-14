<!DOCTYPE html>
<html>
<head>

<title>Tienda</title>

<meta charset='UTF-8' />

<style>

	.titulo {
		
		text-align: center;
		background-color: #aba9a9;
		height: 100px;
		float-top: 50px;
		
	}	
	

	body {
		
	background-image: url("");
	background-color: #cccccc;
	background-size: cover;
	
	}

</style>

</head>

<body>

<?php

	session_start();
	
	if (isset($_POST["submit"])){
	
		$_SESSION["usuario"] = $_POST["usuario"];
		
		$carrito = array('monitor' => 0,'movil' => 0,'mp4' => 0,'raton' => 0,'alfombrilla' => 0,'pendrive' => 0 );
		
		$precio = array('monitor' => 210,'movil' => 300,'mp4' => 12,'raton' => 20,'alfombrilla' => 30,'pendrive' => 24 );
	
		$_SESSION["carrito"] = $carrito;
		
		$_SESSION["precio"] = $precio;

	}
	
	echo "<div class='titulo'><h1>Bienvenid@ " . $_SESSION["usuario"]. "</h1></div><br><br>";
	
	// --------------------------------------------------------------------------------------------------------------

	$monitor = array("Producto" => "Monitor", "Descripcion" => "22 pulgadas", "Precio" => 210 );
  
	$movil = array("Producto" => "Movil", "Descripcion" => "4G", "precio" => 300 );

	$mp4 = array("Producto" => "MP4", "Descripcion" => "20Gb", "precio" => 12 );
  
	$raton = array("Producto" => "Raton", "Descripcion" => "6000dpi", "precio" => 20 );
  
	$alfombrilla = array("Producto" => "Alfombrilla", "Descripcion" => "negra", "precio" => 30 );
  
	$pendrive = array("Producto" => "Pendrive", "Descripcion" => "120Gb", "precio" => 24 );
	
	// --------------------------------------------------------------------------------------------------------------
 
	$productos = array("monitor" => $monitor, "movil" => $movil, "mp4" => $mp4, "raton" => $raton, "alfombrilla" => $alfombrilla, "pendrive" => $pendrive);
	
	$_SESSION["productos"] = $productos;
	
	
	// ---------------------------------------------------------------------------------------------------------------------
	
	// Para añadir y quitar
	
	if (isset($_POST["agregar"])) {
		
		$producto=$_POST["agregar"];
	 
		$_SESSION['carrito'][$producto]++;
	 
	}
	
	if (isset($_POST['quitar'])){
		
		if($_SESSION['carrito'][$_POST['quitar']]>0){
		 
			$producto=$_POST['quitar'];
		 
			$_SESSION['carrito'][$producto]--;
		 
		}
	 
	}
	
	// ---------------------------------------------------------------------------------------------------------------------

?>

  <form action="" method="POST"> 
    <table>
      <tr>
        <?php
        $i = 1;
 
        foreach ($productos as $produ => $cosas) {
			
          echo "<td><fieldset>";
		  
          foreach ($cosas as $campo => $dato) { ?>
		  
            <p>
			
			<?php echo $campo ?> <b><?php echo $dato;} ?>
			
            </b></p>
              
            <button type="submit" name="agregar" value=<?php echo $produ; ?> > Añadir al carrito </button>
			
			</fieldset>

            </td>
			
			<?php
			
			}
			
			?>
		  
      </tr>
    </table>
  </form>
  <br><br><br>
  
	<div>
	
	<h3>Tu carro:</h3>
	
	<ul>

    <form action="" method="POST">
	
	<?php
	
	$total = 0;
	
    foreach ($_SESSION["carrito"] as $cositas => $prod) {
		
      if ($prod>0) {
		  
		$precio = ($prod*$_SESSION["precio"][$cositas]);
		echo "<li>Producto: " . $productos[$cositas]['Producto']." x $prod Precio: ". $precio . "€";
		echo "<button type='submit' name='quitar' value='$cositas'> Quitar </li><br>";
		
		$total = $total + $precio;
		
		}
		
		//echo "Precio total: ";

    }
	
	if ($total>0) {
	
		echo "<br><br>- Precio total: " . $total . "€";
	
	
    ?>
	  
	</ul>
	
    </form>
	
	<form action="confirmacion.php" method="POST">
	
		<button type="submit" name="pagar" value="pagar ya"> Pagar </button>
	
	</form>
	
		<?php
		
			
	}
	
    ?>

  </div>

</body>
</html>