<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        form {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    ?>

        <h1>Iniciar sesión</h1>
        <form action="#" method="POST">
            <p>Login del usuario: </p>
            <input type="text" name="login" required><br />
            <br />
            <p>Contraseña: </p>
            <input type="password" name="password" required><br />
            <br />
            <input type="submit" value="Entrar" name="enviar">
        </form>
        <form method="POST" action="#">
        <input type="submit" name="cerrar" value="Cerrar sesion">
         </form>
        <?php
        if (isset($_POST["cerrar"])) {
            session_destroy();
            echo "<br/><span>El usuario ha cerrado sesión</span>";
        }
    if (isset($_POST["enviar"])) {
        $conectar = mysqli_connect('localhost', 'acceso', 'acceso', 'video');
        $usuario = "SELECT id,name,email,password from usuarios where name='$_POST[login]' and password='$_POST[password]'";
        $select = mysqli_query($conectar, $usuario);
        $fila = mysqli_fetch_assoc($select);
        if (empty($fila)) {
            echo "<br/>Usuario: $_POST[login]<br/>El usuario intrducido no existe";
        } else {
            $_SESSION["name"] = $fila["name"];
            $_SESSION["id"]= $fila["id"];
            ?>
            <br/>
            <form method="POST" action="InsertarPelicula.php">
                    <input type="submit" value="Insertar pelicula" name="Insertar">
                </form>
                <br />
                <form method="POST" action="PeliculasDisponibles.php">
                    <input type="submit" value="Peliculas disponibles por nota" name="Peliculas disponibles">
                </form>
                <br/>
                <form method="POST" action="PeliculasOrdenadas.php">
                    <input type="submit" value="Peliculas Ordenadas por años" name="Peliculas Ordenadas">
            </form>
            <?php
        }
    }
        ?>
</body>

</html>