<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 14</title>

<meta charset='UTF-8' />

</head>

<?php

	$numero1 = 1;
	$numero2 = 5;
	$numero3 = 4;
	
	echo "Numero 1 = " . $numero1 . "<br/> ";
	echo "Numero 2 = " . $numero2 . "<br/> ";
	echo "Numero 3 = " . $numero3 . "<br/><br/> ";
	
	if ($numero1 > $numero2 && $numero1 > $numero3){
		
		echo "Numero 1 es mayor que numero 2 y que numero 3";
		
			}elseif($numero2 > $numero1 && $numero2 > $numero3){
		
				echo "Numero 2 es mayor que numero 1 y que numero 3";
		
				}else{
					
					echo "Numero 3 es mayor que numero 1 y que numero 2";
					
				}


?>


</body>
</html>