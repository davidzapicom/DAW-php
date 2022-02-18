<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
session_start();
if (isset($_POST["login"])){
    $usuario = $_SESSION["usuario"] = $_POST["usuario"];
    $password = $_SESSION["password"] = $_POST["password"];
    $enlace = mysqli_connect ('localhost', 'root', '', 'cifp');
    $select = "SELECT * FROM usuarios WHERE login= '$usuario' AND password= '$password'";
    $resultado = mysqli_query($enlace, $select);
		if (mysqli_num_rows($resultado) > 0) { 
			while($fila = mysqli_fetch_assoc($resultado)) {
               $_SESSION["rol"] = $fila["rol"];
               if ($_SESSION["rol"] == 'director'){ 
                echo "Bienvenido " . $_SESSION["rol"] . " nombre de usuario " . $_SESSION["usuario"] . " <br><br>";
                echo '<br><a href="ejercicio2.php">Insertar alumnos</a>';
                echo '<br><a href="ejercicio3.php">Nota media por asignatura</a>';
               }
               if ($_SESSION["rol"] == 'alumno'){
                echo "El usuario con el rol alumno no tiene acceso a esta aplicacion";
                echo '<br><a href="index.php">Volver</a>';
               }
            }
        }else{
            echo "Ese usuario no existe o pusiste mal la contraseña";
            echo '<br><a href="ejercicio1.php">Volver</a>';
           }
}else{
?>
<div>
<form action="#" method="post">
	Usuario: <input name="usuario" type="text" required/> <br><br>
    Password: <input name="password" type="password" maxlength="12" required/> <br><br>	
	<input type="submit" value="Entrar" name="login"/>
</form>
</div>
<?php
}
?>
</body>
</html>