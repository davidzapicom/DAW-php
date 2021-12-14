<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 12 - Practica 3</title>

<meta charset='UTF-8' />

</head>

<?php

if (isset($_POST["enviar"])) {

  if (empty($_POST["url"])) {
	  
    $url = "";
	
	echo "No has introducido ninguna URL";
	
  } else {
	  
    $url = test_input($_POST["url"]);
	
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
		
      $urlErr = "Invalid URL";
	  
    }
	
  }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   return $data;
} 

?>

<form action="" method="POST">

  <label for="url">Introduce la URL:</label>
  
  <input type="text" id="url" name="url">
  
  <input type="submit" name="enviar" value="Enviar">
  
</form>

</body>
</html>