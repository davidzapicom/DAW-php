<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 12</title>

<meta charset='UTF-8' />

</head>

<?php

$mes = [

"Enero" => 9,
"Febrero" => 12,
"Marzo" => 0,
"Abril" => 17

];

foreach ($mes as $nombre => $pelicula){

	if( $pelicula > 0){
		
		echo "El mes de $nombre se han visto $pelicula peliculas <br>";
		
	}
	
}

?>

</body>
</html>