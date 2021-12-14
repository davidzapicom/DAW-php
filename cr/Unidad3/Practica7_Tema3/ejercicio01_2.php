<?php

	session_start();
	session_destroy();

	echo "Datos introducidos (Sesion): <br><br>
			Usuario: ".$_SESSION["usuario"] . "<br><br>
			Contraseña: ".$_SESSION["clave"] . "<br><br>";
	
	echo "Datos introducidos (Post): <br><br>
			Usuario: " . $_POST['usuario'] . "<br><br>
			Contraseña: " . $_POST['contrasena'] . "<br><br>";

?>
