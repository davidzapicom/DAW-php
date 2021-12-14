<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 18</title>

<meta charset='UTF-8' />

</head>

<?php

$lenguajes_cliente = [

1 => "HTML",
2 => "JavaScript",
3 => "VBScript",
4 => "CSS"

];

$lenguajes_servidor = [

1 => "CGI",
2 => "Perl",
3 => "ASP",
4 => "PHP",
5 => "JSP"

];

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo '<table>';

foreach ($lenguajes as $posicion => $todo){
	
	echo "<tr>";
	
	echo  "<td>Posicion: $posicion y su contenido es: $todo </td>";
	
	echo "</tr>";
	
}

echo '</table>';



?>

</body>
</html>