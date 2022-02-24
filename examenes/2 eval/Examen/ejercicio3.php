<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Listado de peliculas disponibles ordenadas por nota</h1>
    <?php
    session_start();
    $usu = $_SESSION["usuario"];
    echo '<p>Nombre: ' . $usu . '</p>';

    $enlace = mysqli_connect("localhost", "acceso", "acceso", "video");
    $consulta = mysqli_query($enlace, "SELECT * FROM peliculas WHERE rented='0' ORDER BY nota DESC");
    if (mysqli_num_rows($consulta) != 0) {
        echo "<table>";
        while ($datos = mysqli_fetch_array($consulta)) {
            echo "<table>";
            echo "<tr>";
            echo "<tr> Titulo: " . $datos['title'] . "</tr><br/><br/>";
            echo "<tr> Año: " . $datos['year'] . "</tr><br/><br/>";
            echo "<tr> Director: " . $datos['director'] . "</tr><br/><br/>";
            echo "<tr> Nota: " . $datos['nota'] . "</tr><br/><br/>";
            echo "</tr>";
            echo "</table>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>