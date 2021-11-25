<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        fieldset {
            display: inline-block;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    <fieldset>
        <h1>Bienvenido a la tienda</h1>
        <form action="productos.php" method="POST">
            Ingrese su nombre:<input type="text" name="nombre">
            <input type="submit" name="boton" value="Ingresar">
        </form>
    </fieldset>
</body>
</html>