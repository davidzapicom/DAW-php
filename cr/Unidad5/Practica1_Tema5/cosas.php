<!DOCTYPE html>
<html>
<body>

<head>

<title>Cosas - (Ejercicio 1 - Tema 5)</title>

<meta charset='UTF-8' />

</head>

<?php

session_start();

if (isset($_POST["submit"])){

    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["password"] = $_POST["password"];

	//echo $_SESSION["usuario"] . " " . $_SESSION["password"];

	$host='localhost'; $nombre_bd='ventas';

	$usuario_bd='root'; $password_bd=''; //Usuario y contraseña momentaneos
		
	$_SESSION["enlace"] = mysqli_connect ( $host, $usuario_bd, $password_bd='', $nombre_bd ); 
	
	/*if (mysqli_connect_errno()) {

		echo "Conexión fallida";
		
		}else {
		
			echo "Ahora estas conectado";

			//!empty($result) && 
		
		}*/

	$usu = $_SESSION['usuario'];
	$pass = $_SESSION["password"];

	$select = "SELECT usuario,password,rol FROM usuarios WHERE usuario = '$usu' and password = '$pass' ";
	//$select = "SELECT usuario,password FROM usuarios WHERE usuario = " . $_SESSION['usuario'] . " and password = " . $_SESSION['password'];

    $resultado = mysqli_query($_SESSION["enlace"], $select);
    
    $_SESSION['conex_usu'] = null;

	if (!empty($resultado) && mysqli_num_rows($resultado) > 0) { //Esto un select
    
		while($fila = mysqli_fetch_assoc($resultado)) {
	
            echo " " . $fila["usuario"] . " " . $fila["password"] . "<br>";
            //$_SESSION['conex_usu'] = mysqli_connect ( $host, $usuario_bd, $password_bd='', $nombre_bd ); ;
	
		}
	
		} else {
	
            echo "Ese usuario no existe <br/>";
            echo '<a href="login.php">Volver al login</a>';
	
		}

}

?>

</body>
</html>

