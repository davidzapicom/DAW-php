<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 23</title>

<meta charset='UTF-8' />

</head>

<?php

$estadios_futbol = array(

"Barcelona" => "Camp Nou",
"Real Madrid" => "Santiago Bernabeu", 
"Valencia" => "Mestalla",
"Real Sociedad" => "Anoeta"

);

echo "Tabla con todo: <br><br>";

echo "<table border = 1px>";
 
foreach ($estadios_futbol as $equipo => $estadio){
	
	echo "<tr>";
	
	echo "<td>Estadio $estadio del equipo $equipo.</td>";
	
	echo "</tr>";
	
}

echo "</table>";

unset($estadios_futbol["Real Madrid"]);

echo "<br>Listado sin el Real Madrid <br>";

echo "<ol>";

foreach ($estadios_futbol as $estadio => $futbol){
	
	echo "<li>Estadio $estadio del equipo $equipo.</li>";
	
}

echo "<ol>";

?>

</body>
</html>