<html>
	<body>
		<?php

		if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
		
			setcookie("usuario", $_POST['usuario'], time()+3600);
			setcookie("contrasena", $_POST['contrasena']);

			echo "Los datos introducidos son los siguientes:<br>
			Usuario: ".$_COOKIE["usuario"]."<br>
			Contraseña: ".$_COOKIE["contrasena"];
			
			
		}else{
			
			echo "Error";
			
		}


		?>



	</body>
</html>
