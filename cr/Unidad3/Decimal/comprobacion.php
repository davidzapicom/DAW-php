<!DOCTYPE html>
<html>
<body>

<head>

<title>Comprobacion</title>

<meta charset='UTF-8' />

</head>

<?php

session_start();

if (isset($_POST["comprobar"])){
	
    $respuesta = $_POST["respuesta"];

    $correcto = $_SESSION["contador"];

}

//------------------------------- Comprobacion ---------------------------------------------------------------------

if ($respuesta == $correcto){

        echo "Has acertado";

        session_destroy();

        echo '<a href="decimal.php"> Volver a jugar </a>';
    
    }else{
    
        echo "Has fallado";

        echo '<a href="decimal.php"> Volver a jugar </a>';
    
}
    

 
?>



</body>
</html>