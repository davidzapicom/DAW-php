<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: grid;
            place-items: center;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    $error = "";
        if(isset($_POST['login'])) {
            $_SESSION['dni'] = $_POST['dni'];
            $_SESSION["con"] = mysqli_connect('localhost','administrador','administrador','oposicion');
            $sentencia = 'SELECT * FROM prefesor,alumno WHERE dniA="' .$_SESSION["dni"]. '" OR dniP="' .$_SESSION["dni"]. '"';
            $result = mysqli_query($_SESSION["con"],$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            mysqli_close($_SESSION["con"]);
            if (mysqli_num_rows($result) == 0) {
                $error = "Usuario inexistente o contraseña incorrecta";
            } else {
                header("location:#.php");
            }
        }
    ?>
    <div class="form">
        <form action="#" method="post">
            <input type="text" name="dni" placeholder="DNI" required>
            <br />
            <p><?php echo "<strong>$error</strong>"; ?></p>
            <input type="submit" name="login" value="ENTRAR">
        </form>
    </div>
</body>
</html>