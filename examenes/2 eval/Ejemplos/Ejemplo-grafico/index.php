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
    $conectar = mysqli_connect('localhost', "root", "", 'cifp');
    $select2= "SELECT asignatura, AVG(nota) from notas GROUP BY asignatura";
    $select = mysqli_query($conectar, $select2);
    echo "<br/>";
    echo "<table>";
    while ($valores = mysqli_fetch_array($select)) {
        echo "<tr>";
        echo "<td>$valores[asignatura]</td>";
        $aux=$valores["AVG(nota)"]*100;
        echo "<td>";
        echo "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
        echo "            width=\"$aux\" height=\"50\">\n";
        echo "            <line x1=\"0\" y1=\"25\" x2=\"$aux\" y2=\"25\" stroke=\"hsl(200, 100%, 50%)\" stroke-width=\"50\" />\n";
        echo "          </svg>\n";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    while ($valores = mysqli_fetch_array($select)) {
        echo "<br/><br/><br/>$valores[asignatura]<br/><br/><br/>";
    }
    ?>
</body>
</html>