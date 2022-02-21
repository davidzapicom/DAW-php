<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php
session_start();
if (isset($_POST["login"])){
    $usuario = $_SESSION["usuario"] = $_POST["usuario"];
    $password = $_SESSION["password"] = $_POST["password"];
    $con = mysqli_connect ('localhost', 'ACCESO', '', 'videoclub');
    $select = "SELECT * FROM usuarios WHERE name='$usuario' AND password= '$password'";
    $resultado = mysqli_query($con, $select);
		if (mysqli_num_rows($resultado) != 0) { 
            echo "Bienvenido <strong> $usuario </strong>";
            echo "<br><a href='ejercicio2.php'>Insertar película</a> <br><a href='ejercicio3.php'>Películas disponibles ordenadas por nota</a> <br><a href='ejercicio4.php'>Películas ordenadas por año</a>";
        } else{
            echo "El usuario no existe o se ha introducido mal la contraseña";
            echo '<br><a href="ejercicio1.php">Volver a intentarlo</a>';
        }
}else{
?>
<div>
<form action="#" method="post">
	Login <input name="usuario" type="text" required/> <br><br>
    Password <input name="password" type="password" maxlength="12" required/> <br><br>	
	<input type="submit" value="Entrar" name="login"/>
</form>
</div>
<?php
}
?>
</body>
</html>