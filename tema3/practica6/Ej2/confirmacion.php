
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
    <fieldset>
        <p>Los datos introducidos son los siguientes.</p>
        <?php
        $nom = $_POST['nombre'];
        $pass = $_POST['contraseña'];
        echo "<p>Usuario: $nom <br/> Contraseña: $pass</p>";
        ?>
    </fieldset>
</body>
</html>