<?php
session_start();
if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'][0] == "director") {
?>
        <html>

        <head>
        </head>

        <body>
            <div>
                Buenos días <?php echo ($_SESSION['nombre']) ?>, se ha validado como <?php echo ($_SESSION['rol'][0]) ?>
            </div>
            <a href="cerrar.php">Cerrar Sesión</a>
            <a href="insertar.php">Insertar Alumno</a>
            <a href="mostrardirector.php">Mostrar Notas</a>
        </body>

        </html>
    <?php
    } else {
    ?>
        <html>

        <head>
        </head>

        <body>
            <div>
                Buenos días <?php echo ($_SESSION['nombre']) ?>, se ha validado como <?php echo ($_SESSION['rol'][0]) ?>
            </div>
            <a href="cerrar.php">Cerrar Sesión</a>
            <a href="consultar.php">Consultar notas</a>
        </body>

        </html>
        <?php
    }
} else {
    if ((isset($_POST["nombre"]) && isset($_POST["pass"]))) {
        $_SESSION['nombre'] = $nombre = $_POST["nombre"];
        $contra = $_POST["pass"];
        $conexion = mysqli_connect("localhost", "root", "", "cifp");
        $_SESSION['rol'] = mysqli_fetch_array(mysqli_query($conexion, "SELECT rol FROM usarios WHERE login = '$nombre' AND password = '$contra'"));
        mysqli_close($conexion);
        if ($_SESSION['rol'][0] == "director") {
        ?>
            <html>

            <head>
            </head>

            <body>
                <div>
                    Buenos días <?php echo ($_SESSION['nombre']) ?>, se ha validado como <?php echo ($_SESSION['rol'][0]) ?>
                </div>
                <a href="cerrar.php">Cerrar Sesión</a>
                <a href="insertar.php">Insertar Alumno</a>
                <a href="mostrardirector.php">Mostrar Notas</a>
            </body>

            </html>
        <?php
        } else {
            $conexion = mysqli_connect("localhost", $_SESSION["rol"][0], $_SESSION["rol"][0], "cifp");
            $_SESSION['idalumno'] = mysqli_fetch_array(mysqli_query($conexion, "SELECT id FROM usarios WHERE login = '$nombre' AND password = '$contra'"));
            mysqli_close($conexion);
        ?>
            <html>

            <head>
            </head>

            <body>
                <div>
                    Buenos días <?php echo ($_SESSION['nombre']) ?>, se ha validado como <?php echo ($_SESSION['rol'][0]) ?>
                </div>
                <a href="cerrar.php">Cerrar Sesión</a>
                <a href="consultar.php">Consultar notas</a>
            </body>

            </html>
<?php
        }
    }
}
?>