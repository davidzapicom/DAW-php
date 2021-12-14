<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 02</title>
	</head>
	<body>
	
	
	<?php

		if(isset($_COOKIE["color"]))
			
			echo "<body bgcolor=$_COOKIE[color]>";

	?>

	
		<form action="ejercicio01_1.php" method="post">
		
		<p>Elige el color que se mostrara al recargar la pagina:</p>
		
		<input type="radio" id="rojo" name="color" value="#9C281E">
		<label for="male">Rojo</label><br>
		
		<input type="radio" id="verde" name="color" value="#469C1E">
		<label for="female">Verde</label><br>
		
		<input type="radio" id="azul" name="color" value="#2F5DCF">
		<label for="other">Azul</label><br><br>

		<input type="submit" value="Crear cookie" name="submit"/>
		
		
		
	

</body>
</html>
