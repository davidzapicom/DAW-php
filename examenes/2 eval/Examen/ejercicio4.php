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
    $usu = $_SESSION["usuario"];
    echo '<p>Nombre: ' . $usu . '</p>';

    $enlace = mysqli_connect("localhost", "acceso", "acceso", "video");
    $consulta = mysqli_query($enlace, 'SELECT MIN(year), MAX(year), title FROM peliculas');
    echo "<table>";
    echo "<tr>";
    echo "<th>Película más nueva</th>";
    echo "<th>Película más antigua</th>";
    echo "</tr>";
    while ($datos = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>" . $datos['MAX(year)'] . "</td>";
        echo "<td>" . $datos['MIN(year)'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    
    echo "<br/><br/>";
    echo "<table>";
    $consulta2 = mysqli_query($enlace, "SELECT title,year FROM peliculas GROUP BY id");
    while ($datos3 = mysqli_fetch_array($consulta2)) {
        echo "<tr>";
        echo "<th>" . $datos3['title'] . "</th>";
        echo '<td><svg version="1.1" xmlns="http://www.w3.org/2000/svg"';
        echo 'width="' . ($datos3['ROUND(AVG(year),2)'] * 20) . '" height="50">';
        echo '<line x1="0" y1="25" x2="' . ($datos3['ROUND(AVG(year),2)'] * 20) . '" y2="25" stroke="hsl(200, 100%, 50%)" stroke-width="50" />';
        echo '</svg></td>';
        echo "<td>" . $datos3['ROUND(AVG(year),2)'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>