<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3</title>
<meta charset='UTF-8' />
<style>
table, th, td {
    border: 1px solid black;
    text-align: center;
}
</style>
</head>
<body>
<?php
session_start();
//--------------------------------------------------------------------------------------------
$_SESSION["enlace"] = mysqli_connect('localhost', 'root', '', 'cif');
$enlace = $_SESSION["enlace"];
//---------------------------------------------------------------------------------------------
echo "Bienvenido " .$_SESSION["rol"]. " nombre de usuario " .$_SESSION["usuario"]. " <br><br>";
echo "<h1>Nota media, maxima y minima por asignatura</h1>"
?>
<table>
        <tr>
            <th>Asignatura</th>
            <th>Media</th> 
            <th>Grafica media</th>
            <th>Maxima</th>
            <th>Grafica maxima</th>
            <th>Minima</th>
            <th>Grafica minima</th>
        </tr>
<?php

// Media lengua --------------------------------------------------------------------------------
$sql_lengua_avg = "SELECT AVG(nota) FROM `notas` WHERE asignatura = 'Lengua' ";
$resultado = mysqli_query($enlace, $sql_lengua_avg);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $lengua_avg = $fila["AVG(nota)"];
            }
        }
// MAX
$sql_lengua_max = "SELECT MAX(nota) FROM `notas` WHERE asignatura = 'Lengua' ";
$resultado = mysqli_query($enlace, $sql_lengua_max);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $lengua_max = $fila["MAX(nota)"];
            }
        }
// MIN
$sql_lengua_min = "SELECT MIN(nota) FROM `notas` WHERE asignatura = 'Lengua' ";
$resultado = mysqli_query($enlace, $sql_lengua_min);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $lengua_min = $fila["MIN(nota)"];
            }
        }
// -----------------------------------------------------------------------------------------------
// Media matematicas -----------------------------------------------------------------------------
$sql_matematicas_avg = "SELECT AVG(nota) FROM `notas` WHERE asignatura = 'Matemáticas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_avg);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_avg = $fila["AVG(nota)"];
            }
        }
// MAX
$sql_matematicas_max = "SELECT MAX(nota) FROM `notas` WHERE asignatura = 'Matemáticas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_max);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_max = $fila["MAX(nota)"];
            }
        }
// MIN
$sql_matematicas_min = "SELECT MIN(nota) FROM `notas` WHERE asignatura = 'Matemáticas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_min);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_min = $fila["MIN(nota)"];
            }
        }
// -----------------------------------------------------------------------------------------------
// Media inglés -----------------------------------------------------------------------------
$sql_ingles_avg = "SELECT AVG(nota) FROM `notas` WHERE asignatura = 'Inglés'";
$resultado = mysqli_query($enlace, $sql_ingles_avg);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $ingles_avg = $fila["AVG(nota)"];
            }
        }
// MAX
$sql_ingles_max = "SELECT MAX(nota) FROM `notas` WHERE asignatura = 'Inglés'";
$resultado = mysqli_query($enlace, $sql_ingles_max);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $ingles_max = $fila["MAX(nota)"];
            }
        }
// MIN
$sql_ingles_min = "SELECT MIN(nota) FROM `notas` WHERE asignatura = 'Inglés'";
$resultado = mysqli_query($enlace, $sql_ingles_min);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $ingles_min = $fila["MIN(nota)"];
            }
        }
// -----------------------------------------------------------------------------------------------
$grafica_lengua_avg = "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n
width=\"$lengua_avg\" height=\"20\">\n
<line x1=\"0\" y1=\"25\" x2=\"$lengua_avg\" y2=\"25\" stroke=\"#ff5733\" stroke-width=\"100\" />\n
</svg>\n";

$grafica_matematicas_avg =  "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n
width=\"$matematicas_avg\" height=\"20\">\n
<line x1=\"0\" y1=\"25\" x2=\"100\" y2=\"25\" stroke=\"#ff5733\" stroke-width=\"100\" />\n
</svg>\n";

$grafica_sociales_avg =  "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n
width=\"$sociales_avg\" height=\"20\">\n
<line x1=\"0\" y1=\"25\" x2=\"$sociales_avg\" y2=\"25\" stroke=\"#ff5733\" stroke-width=\"100\" />\n
</svg>\n";

// ----------
echo "<tr><td> Lengua </td><td>" . $lengua_avg . "</td><td>" . $grafica_lengua_avg . "</td><td>" . $lengua_max
. "</td><td>" . "Grafica aqui" . "</td><td>" . $lengua_min . "</td><td>" . "Grafica aqui" . "</td></tr>";

//------
echo "<tr><td> Matematicas </td><td>" . $matematicas_avg . "</td><td>" . $grafica_matematicas_avg . "</td><td>" . $matematicas_max
. "</td><td>" . "Grafica aqui" . "</td><td>" . $matematicas_min . "</td><td>" . "Grafica aqui" . "</td></tr>";

//------
echo "<tr><td> Sociales </td><td>" . $ingles_avg . "</td><td>" . $grafica_ingles_avg . "</td><td>" . $ingles_max
. "</td><td>" . "Grafica aqui" . "</td><td>" . $ingles_min . "</td><td>" . "Grafica aqui" . "</td></tr></table>";
?>
</body>
</html>