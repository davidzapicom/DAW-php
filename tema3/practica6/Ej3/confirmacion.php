<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            display: inline-block;
            border: 3px solid black;
        }
    </style>
</head>
<body>

<?php
session_start();
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["contraseña"] = $_POST["contraseña"];
?>
    <fieldset>
        <p>Los datos introducidos son los siguientes.</p>
        <?php
        $nom = $_POST["nombre"];
        $pass = $_POST["contraseña"];
        echo "<p>Usuario: $nom <br/> Contraseña: $pass</p>";
        ?>
        <p>Son correctos?</p>
        <a href="login.php">Si</a>
        <a href="index.php">No</a>
    </fieldset>
</body>
</html>