<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo cursos</title>
    <style>
        p {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $dni = $_SESSION["dni"];
    $usu = $_SESSION["usuario"];
    echo '<p>Profesor: '.$dni. ' <br/> Nombre: ' .$usu. '</p>';
    ?>

    
</body>
</html>