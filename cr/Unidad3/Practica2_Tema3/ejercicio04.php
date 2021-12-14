<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 04</title>

<meta charset='UTF-8' />

</head>

<form action="ejercicio04_2.php" method="post">

<?php

for ($fila = 0 ; $fila < 4 ; $fila++)
	
{
    for ($columna = 0 ; $columna < 4 ; $columna++)
    {
      
        echo "<input type='text' name='matriz[$fila][$columna]' value='" . rand(1,100) . "'> &nbsp";
		
    }
	
    echo '<br><br>';
}
?>

<input type="submit" value="Enviar">

</form>




</body>
</html>