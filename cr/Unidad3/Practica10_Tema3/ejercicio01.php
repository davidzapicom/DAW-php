<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 1 - Practica 10</title>

<meta charset='UTF-8' />

</head>

<?php

    session_start();
    


?>

<form action="tienda.php" method="post">
		
		Introduzca su nombre: <input name="usuario" type="text" required/> &nbsp
			
		<input type="submit" value="Conectarse" name="submit"/>

	</form>


</body>
</html>