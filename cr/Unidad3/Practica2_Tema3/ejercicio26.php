<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 26</title>

<meta charset='UTF-8' />

</head>

<?php

	$familias=array(
	
	"Los Simpson"=>array(
	
		"Padre" => "Homer", 
		"Madre" => "Marge",
		"Hijos" => "Bart, Lisa, Maggie"
		
	), 
	
	"Los Griffin" => array(
	
		"Padre" => "Peter", 
		"Madre" => "Lois",
		"Hijos" => "Chris, Meg, Stewie"
	)

	);
	
	foreach ($familias as $familia => $tipos){

		echo  "<ul> $familia: <br><br>";

			foreach ($tipos as $tipo => $nombres){
				
				echo  "<li> $tipo: $nombres </li>";
				
			}
			
			echo "</ul>";
			
	}

	
?>

</body>
</html>