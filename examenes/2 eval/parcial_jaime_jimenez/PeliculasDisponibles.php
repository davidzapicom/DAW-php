<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $conectar = mysqli_connect('localhost', 'acceso', 'acceso', 'video');
    $select = "SELECT title,year,director,nota from peliculas ORDER BY nota DESC";
    $consulta = mysqli_query($conectar, $select);
    echo "<br/>";
    echo "<h1>Listado de peliculas disponibles ordenadas por nota</h1>";
    echo "<table>";
    while ($valores = mysqli_fetch_array($consulta)) {
        echo "<tr>";
            echo "<td>Titulo: $valores[title]<br/>Año: $valores[year]<br/>Director: $valores[director]<br/>Nota:  $valores[nota]<br/>";
            $aux=$valores["nota"]*10;
            echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
            echo "            width=\"$aux\" height=\"50\">\n";
            echo "            <line x1=\"0\" y1=\"5\" x2=\"$aux\" y2=\"5\" stroke=\"hsl(200, 100%, 50%)\" stroke-width=\"50\" />\n";
            echo "          </svg>\n";
            echo "<br/><br/><br/>";
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>