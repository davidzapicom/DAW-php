<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario matriz</title>
</head>
<body>
    <h1>Valores:</h1>
        <?php 
            $num=sqrt(count($_POST)-1);
            for ($i = 1; $i <= $num; $i++){
                for ($j = 1; $j <= $num; $j++){
                    $valores = $_POST["$i$j"];
                    echo "<br/>El valor de la caja  $i$j es $valores";
                }
            }

           /* $sumaprincipal = 0, $sumasecundaria = 0;
            for ($i = 1; $i <= $num; $i++){
                echo "Los elementos de la diagonal principal son: " ; 
                echo $_POST["$i$i"];
                echo $sumaprincipal+=$_POST["$i$i"];
            }

            for ($i = 1; $i <= $num; $i++){
                echo "Los elementos de la diagonal secundaria son: " ; 
                $j--;
                echo $_POST["$i$j"];
                echo $sumasecundaria+=$_POST["$i$j"];
            }*/
        ?>
</body>
</html>
    