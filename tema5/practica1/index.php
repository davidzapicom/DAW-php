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
$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
  if (empty($_POST["name"])) {
    $nameErr = "Nombre requerido";
  } else {
    $name = limpiar_datos($_POST["name"]);
    // comprobar si el nombre contiene solo letras y espacios en blanco.
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Solo se aceptan letras y espacios en blanco.";
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
?>
    <div class="contenedor">
        <h2>LOGIN</h2>
        <p><span class="error">* Campos requeridos.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Usuario: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br/><br/>
            Clave: <input type="password" name="pass" value="<?php echo $pass;?>">
            <span class="error">* <?php echo $passErr;?></span>
            <br/><br/>
            <input type="submit" name="login" value="Iniciar sesion">  
        </form>
    </div>
    </body>
</html>