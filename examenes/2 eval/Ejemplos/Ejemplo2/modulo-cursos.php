<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo cursos</title>
    <style>
        p {
            text-transform: uppercase;
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }

        th,
        tr,
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $dni = $_SESSION["dni"];
    $usu = $_SESSION["usuario"];
    echo '<p>Profesor: ' . $dni . ' <br/> Nombre: ' . $usu . '</p>';

    $enlace = mysqli_connect("localhost", "root", "", "oposicion");
    $consulta = mysqli_query($enlace, "SELECT * FROM curso WHERE profesor= '$dni'");
    if (mysqli_num_rows($consulta) == 0) {
        echo "El profesor $dni no esta en ningun curso.";
        echo "<br/>";
    } else {
        echo "<table>";
        echo "<tr>";
        echo "<th>CODIGO CURSO</th>";
        echo "<th>NOMBRECURSO</th>";
        echo "<th>MAX ALUMNOS</th>";
        echo "<th>FECHA INICIO</th>";
        echo "<th>FECHA FIN</th>";
        echo "<th>NUM HORAS</th>";
        echo "<th>PROFESOR</th>";
        echo "</tr>";
        while ($datos = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            echo "<td>" . $datos['codigocurso'] . "</td>";
            echo "<td>" . $datos['nombrecurso'] . "</td>";
            echo "<td>" . $datos['maxalumnos'] . "</td>";
            echo "<td>" . $datos['fechaini'] . "</td>";
            echo "<td>" . $datos['fechafin'] . "</td>";
            echo "<td>" . $datos['numhoras'] . "</td>";
            echo "<td>" . $datos['profesor'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $sql = mysqli_query($enlace, "SELECT SUM(numhoras) as total FROM curso WHERE profesor= '$dni'");
        while ($a = mysqli_fetch_assoc($sql)){
            echo "<br/><br/>Total horas impartidas por el profesor $dni: " .$a['total'];
        }
    }
    ?>
</body>
</html>