<html>
	<body>

<?php

	session_start();

	if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
		
			
		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['clave'] = $_POST['contrasena'];
			
		/*echo "Datos introducidos: <br><br>
			Usuario: ".$_SESSION["usuario"]."<br><br>
			Contraseña: ".$_SESSION["clave"];*/
				
				
		header("Location: ejercicio01_2.php");

	}else{
			
		echo "Error";
			
	}

?>
			


	</body>
</html>
