<?php
    session_start();
    if(isset($_SESSION["rol"])){
        $id = $_SESSION['idalumno'][0];
        $conexion = mysqli_connect("localhost", $_SESSION["rol"][0], $_SESSION["rol"][0], "cifp");
        $sql = "SELECT asignatura, fecha, nota FROM notas WHERE alumno = '$id'";
        $suspendidas = 0;
        $resultados = mysqli_query($conexion, $sql);
        ?>
        <div>
            Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
        </div>
        <a href="cerrar.php">Cerrar Sesión</a>
        <table>
            <tr>
                <td>
                    Asignatura
                </td>
                <td>
                Fecha
                </td>
                <td>
                Nota
                </td>
            </tr>
        <?php
        while($fila = mysqli_fetch_assoc($resultados)){
            echo("<tr>");
            echo("<td>" . $fila["asignatura"] . "</td>");
            echo("<td>" . $fila["fecha"] . "</td>");
            echo("<td>" . $fila["nota"] . "</td>");
            echo("</tr>");
            if($fila["nota"] < 5){
                $suspendidas ++;
            }
        }
        ?>
        </table>
        <?php
        echo("<br>Has suspendido $suspendidas <br>");
        ?>
        <a href="login.php">Volver</a>
        <?php
    }
    else{
        header("location:login.php");
    }
?>