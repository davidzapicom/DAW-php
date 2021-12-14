<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 17</title>

<meta charset='UTF-8' />

</head>

<?php

$nombres = array("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");

echo "El array tiene " . count($nombres) . "  nombres.<br><br>";

echo "Nombres listados: <br>";

echo "<ul>";

for ($i = 0 ; $i < 7 ; $i++){
	
	echo "<li>$nombres[$i]</li><br>";
	
}
 
echo "</ul>";

?>

</body>
</html>