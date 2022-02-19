<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo cursos</title>
</head>
<body>
    <?php
    session_start();
    $dni = $_SESSION["dni"];
    echo 'PROFESOR: '.$dni. ' | NOMBRE: ' ;
    ?>

    
</body>
</html>