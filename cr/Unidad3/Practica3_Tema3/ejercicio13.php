<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 13 - Practica 3</title>

<style>
.error{
	
	color: red;
	
}

</style>

<meta charset='UTF-8' />

</head>

<?php

$nombreError = $emailError = $URLError = $sexoError = "";
$nombre = $email = $sexo = $comentarios = $URL = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
// ------ Desde aqui se comprueba el nombre -------------------------
	
   if (empty($_POST["nombre"])) {
	   
     $nombreError = "Nombre es obligatorio";
	 
   } else {
	   
     $nombre = test_input($_POST["nombre"]);
	 
     if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
		 
       $nombreError = "Sólo se permiten letras y espacios";
	   
     }
	 
   }
   
// -------------------------------------------------------------------

// ------ Desde aqui se comprueba el email ---------------------------
  
   if (empty($_POST["email"])) {
	   
     $emailError = "Email es obligatorio";
	 
   } else {
	   
     $email = test_input($_POST["email"]);
	 
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 
       $emailError = "Formato de email inválido";
	   
     }
	 
   }
   
// -------------------------------------------------------------------

// ------ Desde aqui se comprueba la url -----------------------------
  
   if (empty($_POST["URL"])) {
	   
     $URL = "";
	 
   } else {
	   
     $URL = test_input($_POST["URL"]);
     
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$URL)) {
		 
       $URLError = "URL inválida";
	   
     }
	 
   }
   
      
// -------------------------------------------------------------------

// ------ Desde aqui se comprueba el comentario ----------------------
  

   if (empty($_POST["comentarios"])) {
	   
     $comentarios = "";
	 
   } else {
	   
     $comentarios = test_input($_POST["comentarios"]);
	 
   }
   
      
// -------------------------------------------------------------------

// ------ Desde aqui se comprueba el sexo ----------------------------
  

   if (empty($_POST["sexo"])) {
	   
     $sexoError = "Sexo es obligatorio";
	 
   } else {
	   
     $sexo = test_input($_POST["sexo"]);
	 
   }
   
}

   
// -------------------------------------------------------------------
  
 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   return $data;
} 
 
?>

<h2>Formulario PHP - Validación</h2>

<p><span class="error">* Campo con asterisco bligatorio</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
   <span class="error">* <?php echo $nombreError;?></span> <br><br>
   
   Email: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailError;?></span> <br><br>
   
   URL: <input type="text" name="URL" value="<?php echo $URL;?>">
   <span class="error"><?php echo $URLError;?></span> <br><br>
   
   Comentarios: <textarea name="comentarios" rows="5" cols="40"><?php echo $comentarios;?></textarea> <br><br>
   
   Sexo:
   <input type="radio" name="sexo" 
	<?php if (isset($sexo) && $sexo=="femenino") echo "checked";?>  value="femenino">Femenino

   <input type="radio" name="sexo" 
	<?php if (isset($sexo) && $sexo=="masculino") echo "checked";?>  value="masculino">Masculino

   <span class="error">* <?php echo $sexoError;?></span> <br><br>
   
   <input type="submit" name="submit" value="Submit">
   
</form>

<?php
echo "<h2>Datos introducidos:</h2>";
echo $nombre;
echo "<br>";
echo $email;
echo "<br>";
echo $URL;
echo "<br>";
echo $comentarios;
echo "<br>";
echo $sexo;
?>

</body>
</html>