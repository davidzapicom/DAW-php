<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {
                color: #FF0000;
            }
        </style>
    </head>
    <body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nombre requerido";
  } else {
    $name = limpiar_datos($_POST["name"]);
    // comprobar si el nombre contiene solo letras y espacios en blanco.
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Solo se aceptan letras y espacios en blanco.";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email requerido";
  } else {
    $email = limpiar_datos($_POST["email"]);
    // comprobar si la direccion email es correcta.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Dirección de correo invalida.";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = limpiar_datos($_POST["website"]);
    // comprobar si la direccion URL es valida.
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL no válida.";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = limpiar_datos($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = limpiar_datos($_POST["gender"]);
  }
}

function limpiar_datos($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <h2>Ejemplo de validacion formulario PHP</h2>
    <p><span class="error">* Campos requeridos.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Nombre: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Web: <input type="text" name="website" value="<?php echo $website;?>">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>
      Género:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Mujer
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Hombre
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Otro  
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="ENVIAR">  
    </form>

<?php
<<<<<<< HEAD
echo "<h2>Your Input:</h2>";
echo "$name <br> $email <br> $website <br> $comment <br> $gender";
?>

    </body>
=======
echo "<h2>Tu entrada:</h2><br/> $name <br> $email <br> $website <br> $comment <br> $gender";
?>

  </body>
>>>>>>> 12ca35b7c456d14c6b2ce971394da0a147ca2db5
</html>