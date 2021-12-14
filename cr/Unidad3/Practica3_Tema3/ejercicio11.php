<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 11 - Practica 3</title>

<meta charset='UTF-8' />

</head>

<?php

if (isset($_POST["enviar"])) {

$email = $_POST["email"];

$emailError = "EL email esta correcto";

if (empty($email)) {
	
	$emailError = "Email en blanco -- Introduce Email";

} else {
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$emailError = "Fomato de Email no valido";
		
	}
	
}

echo $email;

echo "<br>";

echo $emailError;

}

?>

<form action="" method="POST">

  <label for="email">Introduce el email:</label>
  
  <input type="text" id="email" name="email">
  
  <input type="submit" name="enviar" value="Enviar">
  
</form>


</body>
</html>