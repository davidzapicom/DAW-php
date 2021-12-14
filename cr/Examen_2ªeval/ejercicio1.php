<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 1</title>

<meta charset='UTF-8' />

</head>

<?php

session_start();

if (isset($_POST["entrar"])){

    $host='localhost'; $nombre_bd='cifpaviles'; //Base de datos

    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["password"] = $_POST["password"];

	$usuario = $_SESSION["usuario"];
    $password = $_SESSION["password"];

    $usuario_bd = "root"; $password_bd = "";

    $enlace = mysqli_connect ( $host, $usuario_bd, $password_bd, $nombre_bd );

    $select_usuario = "SELECT usuario,password,rol FROM usuarios WHERE usuario  = '$usuario' AND password  = '$password'";

    $resultado = mysqli_query($enlace, $select_usuario);

		if (mysqli_num_rows($resultado) > 0) { //Select
    
			while($fila = mysqli_fetch_assoc($resultado)) {

               $_SESSION["rol"] = $fila["rol"];

               if ($_SESSION["rol"] == 'director'){ // Para director

                echo "Bienvenido " . $_SESSION["rol"] . " nombre de usuario " . $_SESSION["usuario"] . " <br><br>";

                echo '<br><a href="ejercicio2.php">Insertar alumnos</a>';

                echo '<br><a href="ejercicio3.php">Nota media por asignatura</a>';

               }

               if ($_SESSION["rol"] == 'alumno'){ // Para alumno

                echo "El usuario con el rol alumno no tiene acceso a esta aplicacion";

                echo '<br><a href="ejercicio1.php">Volver</a>';

               }

            }

        }else{

            echo "Ese usuario no existe o pusiste mal la contraseña";

            echo '<br><a href="ejercicio1.php">Volver</a>';

           }

}else{


?>


<div>

<form action="" method="post">
		
	Usuario: <input name="usuario" type="text" required/> &nbsp <br><br>

    Password: <input name="password" type="password" required/> &nbsp <br><br>
			
	<input type="submit" value="Entrar" name="entrar"/>

</form>

</div>

<?php


}


?>

</body>
</html>