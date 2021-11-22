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
    $_SESSION['nombre'] = $_POST['nombre'];
    ?>
    <form action="session3.php" method="POST">
    Apellido: <input type="text" name="apellido">
    <input type="submit" name="boton" value="Enviar">
</form>
</body>
</html>