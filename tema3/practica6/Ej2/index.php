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
        <p>Bienvenido introduce tu nombre de usuario y contraseña.</p>
        <form action="confirmacion.php" method="POST">
            <input type="text" name="nombre"><br/><br/>
            <input type="password" name="contraseña"><br/><br/>
            <input type="submit" name="boton" value="Enviar">
        </form>
    </fieldset>
</body>
</html>
