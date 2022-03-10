<?php
    session_start();
    if(isset($_POST["asignatura"])){
        $asignatura = $_POST["asignatura"];
        $conexion = mysqli_connect("localhost", $_SESSION["rol"][0], $_SESSION["rol"][0], "cifp");
        $sql = "SELECT alumno, fecha, nota FROM notas WHERE asignatura = '$asignatura'";
        $sql2 = "SELECT max(nota) AS 'alta', min(nota) AS 'baja', avg(nota) AS 'media', count(alumno) AS 'alumnos' FROM notas WHERE asignatura = '$asignatura'";
        $resultados = mysqli_query($conexion, $sql);
        $resultados2 = mysqli_query($conexion, $sql2);
        ?>
        <div>
            Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
        </div>
        <a href="cerrar.php">Cerrar Sesión</a>
        <table>
            <tr>
                <td>Id Alumno</td>
                <td>Fecha</td>
                <td>Nota</td>
            </tr>
            <?php
            while($fila = mysqli_fetch_assoc($resultados)){
                echo("<tr>");
                echo("<td>" . $fila["alumno"] . "</td>");
                echo("<td>" . $fila["fecha"] . "</td>");
                echo("<td>" . $fila["nota"] . "</td>");
                echo("</tr>");
            }
            ?>
        </table>
        <?php
        while($fila2 = mysqli_fetch_assoc($resultados2)){
            ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="<?php echo($fila2["media"] * 10) ?>" height="50">
                <line x1="0" y1="25" x2="<?php echo($fila2["media"] * 10) ?>" y2="25" stroke="hsl(200, 100%, 50%)" stroke-width="50"></line>
             </svg>Nota media
             <br>
             <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="<?php echo($fila2["alta"] * 10) ?>" height="50">
                <line x1="0" y1="25" x2="<?php echo($fila2["alta"] * 10) ?>" y2="25" stroke="hsl(200, 100%, 50%)" stroke-width="50"></line>
             </svg>Nota más alta
             <br>
             <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="<?php echo($fila2["baja"] * 10) ?>" height="50">
                <line x1="0" y1="25" x2="<?php echo($fila2["baja"] * 10) ?>" y2="25" stroke="hsl(200, 100%, 50%)" stroke-width="50"></line>
             </svg>Nota más baja
             <br>
            <?php
            echo("<br>La nota media es " . $fila2["media"]);
            echo("<br>La nota más alta es " . $fila2["alta"]);
            echo("<br>La nota más baja es " . $fila2["baja"]);
            echo("<br>El total de alumnos es " . $fila2["alumnos"]);
        }
        ?>
        <a href="login.php">Volver</a>
        <?php
    }
    else{
    ?>
        <html>
                    <head>
                    </head>
                    <body>
                        <div>
                            Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
                        </div>
                        <a href="cerrar.php">Cerrar Sesión</a>
                        <a href="login.php">Volver</a>
                        <form action="mostrardirector.php" method="post">
                            <select name="asignatura">
                                <option value="Lengua">Lengua</option>
                                <option value="Matemáticas">Matemáticas</option>
                            </select>
                            <input type="submit" name="mostrarboton" value="Mostrar Notas"/>
                        <form>
                    </body>
                </html>

    <?php
    }
?>