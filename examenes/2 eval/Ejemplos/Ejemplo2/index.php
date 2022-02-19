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
        if (mysqli_num_rows($resultadoA) != 0) {
            header('location:modulo-matricular.php');
        } else if (mysqli_num_rows($resultadoP) != 0) {
            header('location:modulo-cursos.php');
        } else {
            echo "Dni introducido inexistente.";
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