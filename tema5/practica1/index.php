<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="contenedor">
      <form action="#" method="post">
        <h1>Log In</h1>
        <input type="text" name="usu" placeholder="Usuari@">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" name="login" value="Iniciar sesion">
      </form>
    </div>
    </body>
<?php
session_start();
  $usu = $_SESSION["usu"] = $_POST["usu"];
  $pass = $_SESSION["pass"] = $_POST["pass"];
session_destroy();

$sentencia = "SELECT usuario, password, rol FROM usuarios WHERE usuario='$usuario' AND password='$pass'";
$enlace = mysqli_connect("localhost", "root", "", "ventas");
$consulta = mysqli_query($enlace, $sentencia);
$fetch = mysqli_fetch_assoc($consulta);
mysqli_close($enlace);

if (mysqli_nums_rows($consulta) == 0) {
    echo "Este usuario no existe";
} else {
  $enlace = mysqli_connect("localhost", "root", "", "ventas");
  if ($fetch["rol"] == "consultor") {
    $rolusu = "consultor";
  } else {
    $rolusu = "administrador";
  }
  echo "Hola $usuario, eres <p class='up'> $rolusu </p>";
}
?>
</html>