<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario matriz</title>
</head>
<body>
    <form action="ejerciciomatriz2.php" method="POST">
        <?php 
        $num=$_POST["caja"];
            for ($i = 1; $i <= $num; $i++){
                echo " <br/>   <br/>";
                for ($j = 1; $j <= $num; $j++){
        ?>
                <input type="text" name="<?php echo "$i$j" ?>">
            <?php
                }
              }
              echo " <br/>   <br/>";
        ?>
        <input type="submit" name="boton" value="Enviar">
    </form>
</body>
</html>