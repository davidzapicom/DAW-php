<!DOCTYPE html>
<html>
<body>
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
<?php
session_start();
//--------------------------------------------------------------------------------------------
$host='localhost'; $nombre_bd='cifpaviles'; //Base de datos
$usuario_bd = 'director'; $password_bd = 'director';
$_SESSION["enlace"] = mysqli_connect ( $host, $usuario_bd, $password_bd, $nombre_bd );
$enlace = $_SESSION["enlace"];
//---------------------------------------------------------------------------------------------
echo "Bienvenido " . $_SESSION["rol"] . " nombre de usuario " . $_SESSION["usuario"] . " <br><br>";
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
$sql_matematicas_avg = "SELECT AVG(nota) FROM `notas` WHERE asignatura = 'Matematicas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_avg);
		if (mysqli_num_rows($resultado) > 0) { //Select   
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_avg = $fila["AVG(nota)"];
            }
        }
// MAX
$sql_matematicas_max = "SELECT MAX(nota) FROM `notas` WHERE asignatura = 'Matematicas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_max);
		if (mysqli_num_rows($resultado) > 0) { //Select   
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_max = $fila["MAX(nota)"];
            }
        }
// MIN
$sql_matematicas_min = "SELECT MIN(nota) FROM `notas` WHERE asignatura = 'Matematicas' ";
$resultado = mysqli_query($enlace, $sql_matematicas_min);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $matematicas_min = $fila["MIN(nota)"];
            }
        }
// -----------------------------------------------------------------------------------------------
// Media sociales -----------------------------------------------------------------------------
$sql_sociales_avg = "SELECT AVG(nota) FROM `notas` WHERE asignatura = 'Sociales' ";
$resultado = mysqli_query($enlace, $sql_sociales_avg);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $sociales_avg = $fila["AVG(nota)"];
            }
        }
// MAX
$sql_sociales_max = "SELECT MAX(nota) FROM `notas` WHERE asignatura = 'Sociales' ";
$resultado = mysqli_query($enlace, $sql_sociales_max);
		if (mysqli_num_rows($resultado) > 0) { //Select
			while($fila = mysqli_fetch_assoc($resultado)) {
                $sociales_max = $fila["MAX(nota)"];
            }
        }
// MIN
$sql_sociales_min = "SELECT MIN(nota) FROM `notas` WHERE asignatura = 'Sociales' ";
$resultado = mysqli_query($enlace, $sql_sociales_min);
		if (mysqli_num_rows($resultado) > 0) { //Select   
			while($fila = mysqli_fetch_assoc($resultado)) {
                $sociales_min = $fila["MIN(nota)"];
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
echo "<tr><td> Sociales </td><td>" . $sociales_avg . "</td><td>" . $grafica_sociales_avg . "</td><td>" . $sociales_max
. "</td><td>" . "Grafica aqui" . "</td><td>" . $sociales_min . "</td><td>" . "Grafica aqui" . "</td></tr></table>";

?>

</body>
</html>