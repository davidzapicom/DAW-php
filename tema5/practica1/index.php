<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <style>
            .contenedor {
                margin: 20px;
            }
            .error {
                color: #FF0000;
            }
            input[type=submit] {
                padding:5px 15px;
                background: none;
                border: 2px solid black;
                border-radius: 5px;
            }
            input[type=submit]:hover {
                padding:5px 15px;
                color: white;
                background: black;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type=text] {
                background: none;
                border: 2px solid black;
                border-radius: 5px;
                padding: 5px;
            }
            input[type=password] {
                background: none;
                border: 2px solid black;
                border-radius: 5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
<?php
$usuErr = $passErr = "";
$usu = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
  if (empty($_POST["usu"])) {
    $usuErr = "Nombre requerido";
  } else {
    $usu = limpiar_datos($_POST["usu"]);
    // comprobar si el nombre contiene solo letras y espacios en blanco.
    if (!preg_match("/^[a-zA-Z-' ]*$/",$usu)) {
      $usuErr = "Solo se aceptan letras y espacios en blanco.";
    }
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Contraseña requerida";
  } else {
    $pass = limpiar_datos($_POST["pass"]);
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //   $passErr = "Contraseña invalida.";
    // }
  }
}

function limpiar_datos($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$enlace = mysqli_connect('localhost','uscomprobacion','','control-usuarios');

$usuario = "SELECT usuario,pass,rol FROM usuarios WHERE usuario='$_POST[usu]' and pass='$_POST[pass]'");

mysqli_close($enlace);

?>
    <div class="contenedor">
        <h2>LOGIN</h2>
        <p><span class="error">* Campos requeridos.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Usuario/a: <input type="text" name="namusue" value="<?php echo $usu;?>">
            <span class="error">* <?php echo $usuErr;?></span>
            <br/><br/>
            Clave: <input type="password" name="pass" value="<?php echo $pass;?>">
            <span class="error">* <?php echo $passErr;?></span>
            <br/><br/>
            <input type="submit" name="login" value="Iniciar sesion">  
        </form>
    </div>
    </body>
</html>