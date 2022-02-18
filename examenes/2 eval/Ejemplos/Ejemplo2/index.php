<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 1</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    session_start();
    if (isset($_POST["login"])) {
        $dni = $_SESSION["dni"] = $_POST["dni"];
        $enlace = mysqli_connect('localhost', 'root', '', 'oposicion');
        $selectA = "SELECT * FROM alumno WHERE dniA= '$dni'";
        $resultadoA = mysqli_query($enlace, $selectA);
        $selectP = "SELECT * FROM profesor WHERE dniP= '$dni'";
        $resultadoP = mysqli_query($enlace, $selectP);
        if (mysqli_num_rows($resultadoA) == 0 && mysqli_num_rows($resultadoP) == 0) {
            echo "Ese usuario no existe o contraseña incorrecta";
            echo '<br><a href="ejercicio1.php">Volver</a>';
        } else if (mysqli_num_rows($resultadoA) != 0) {
            echo '<p>Alumno</p>';
        } else if (mysqli_num_rows($resultadoP) != 0) {
            echo '<p>Profesor</p>';
        }
    } else {
    ?>
        <div>
            <form action="#" method="post">
                DNI: <input name="dni" type="text" required /> <br><br>
                <input type="submit" value="Entrar" name="login" />
            </form>
        </div>
    <?php
    }
    ?>
</body>

</html>