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
    $peliculas= "SELECT title,year from peliculas";
    $Años= "SELECT Max(year) as Mayor, Min(year) as Menor from peliculas";
    $aux1= mysqli_query($conectar, $Años);
    $aux2 = mysqli_fetch_assoc($aux1);
    $Menor = mysqli_query($conectar, "SELECT title from peliculas where year='$aux2[Mayor]'" );
    $Mayor= mysqli_query($conectar, "SELECT title from peliculas where year='$aux2[Menor]'");
    $fila1 = mysqli_fetch_assoc($Menor);
    $fila2 = mysqli_fetch_assoc($Mayor);
    echo "Pelicula mas nueva: $fila1[title]<br/>";
    echo "Pelicula mas vieja: $fila2[title]<br/>";
    echo "<br/>";
    echo "<table>";
    $select = mysqli_query($conectar, $peliculas);
    while ($valores = mysqli_fetch_array($select)) {
        echo "<tr>";
        echo "<td>$valores[title]</td>";
        $aux=$valores["year"]-1600;
        echo "<td>";
        echo "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
        echo "            width=\"$aux\" height=\"50\">\n";
        echo "            <line x1=\"0\" y1=\"15\" x2=\"$aux\" y2=\"15\" stroke=\"hsl(200, 100%, 50%)\" stroke-width=\"50\" />\n";
        echo "          </svg>$valores[year]\n";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>