<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 19</title>

<meta charset='UTF-8' />

</head>

<?php

$pares = 0;
$impares = array();


for ($i = 1 ; $i <= 10 ; $i++ ){
	
	$todo[$i] = $i;
	
  	echo $todo[$i] . "<br>";

  	if( ($todo[$i] % 2) == 0 ){
		
  		$pares = $pares + $todo[$i];
  		
  	} else {

  		$impares[$i] = $i;
     
	}
	
}
 
 
echo " <br> Suma de los pares --> $pares <br>";

echo "Numeros impares: ";

foreach ($impares as $numero => $impar){
	
	echo " $impar ";
	
}

?>

</body>
</html>