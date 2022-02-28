<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	session_start();

	if (!isset($_POST['calc'])) {

	?>
	
	<form action="" method="POST">
		<fieldset>
			<legend>Números en binario</legend>

	<?php
	
	for ($i=0; $i<3; $i++) {
		for ($j=0; $j<2; $j++) {

	?>

			E.<?php echo "$i"; ?>.<?php echo "$j"; ?> 
				<input type="text" name=<?php echo "arr".$i.$j;?>>

	<?php
			if ($j==1) {
				echo "<br/>";
			}
		}
	}

	?>
	
			<input type="submit" name="calc" value="Calcular">
		</fieldset>
	</form>

	<?php

		if (isset($_SESSION['error'])) {
			echo $_SESSION['error'];
		}

	}

	else {

		for ($i=0; $i < 3; $i++) { 
			for ($j=0; $j < 2; $j++) {
				if ($_POST["arr$i$j"]<1 || $_POST["arr$i$j"]>100) {
					$error = "Los números tienen que estar entre 1 y 100";
					$_SESSION['error']=$error;
					header("Location:ejercicio1.php");
				}
				else {
					$arr[$i][$j] = $_POST["arr$i$j"];
				}
			}
		}

		for ($i=0; $i < 2; $i++) { 
			for ($j=0; $j < 3; $j++) {
				if ($j==0) {
					$indice = $j+$i+1;
				}
				if ($j==1) {
					$indice = $j+$i+2;
				}
				if ($j==2) {
					$indice = $j+$i+3;
				}
				echo "<p>".$indice."='".decbin($arr[$j][$i])."'</p>";
			}
		}
	}

	?>						
</body>
</html>