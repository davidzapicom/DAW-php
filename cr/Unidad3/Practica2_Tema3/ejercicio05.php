<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 05</title>

<meta charset='UTF-8' />

</head>

<?php

$relleno[0] = array( rand(1,100) , rand(1,100) , rand(1,100) , rand(1,100) ,rand(1,100) );
$relleno[1] = array( rand(1,100) , rand(1,100) , rand(1,100) , rand(1,100) ,rand(1,100) );
$relleno[2] = array( rand(1,100) , rand(1,100) , rand(1,100) , rand(1,100) ,rand(1,100) );


echo "Por fila: <br><br>" ;

for ($i = 0 ; $i < 3 ; $i++)
	
{
    for ($j = 0 ; $j < 5 ; $j++)
    {
      
        echo  $relleno[$i][$j] . " - ";
		
    }
	
    echo '<br><br>';
	
}

echo "Por columna: <br><br>" ;

for ($i = 0 ; $i < 5 ; $i++)
	
{
    for ($j = 0 ; $j < 3 ; $j++)
    {
      
        echo  $relleno[$j][$i] . " - ";
		
    }
	
    echo '<br><br>';
}

?>




</body>
</html>