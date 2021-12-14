<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 27</title>

<meta charset='UTF-8' />

</head>

<body>

<?php

	
	for ($i = 1; $i <= 50; $i++) {
		
		$cantidad=0;
		
		for ($j=1; $j <=$i; $j++){
			
			if ($i % $j == 0){

				$cantidad++;
			
			}
			
			
		}
		
		if ($cantidad ==1 || $cantidad ==2){
			
			echo $i . " es primo. <br>";
			
		}else{
			
			echo $i . " NO primo. <br>";
			
		}

	
	}

?>


</body>
</html>