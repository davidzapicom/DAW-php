<!DOCTYPE html>
<html>

<head>

<title>Ejercicio 37</title>

<meta charset='UTF-8' />

</head>

<body>

<?php 

if(isset($_POST["Calcular"])){

	$calculo =$_POST["vec"];
	
	$cantidad = count($calculo);
	
	echo "El vector tiene $cantidad elementos <br>";
	
	$suma=0;

 	for ($i=1 ; $i < $cantidad; $i++){

 		echo "$i = $calculo[$i] <br>";
		
 		$suma= $suma + $calculo[$i];
		
 	}
	
 	echo "La suma de todo es $suma <br>";
			
}

?>


<form method="POST" action=""> 

<?php 

$cantidad = 8;

	for($i=1 ; $i<=$cantidad ; $i++){

		echo $i . " --> "; 
		echo "<input type='text' name='vec[]'>";
		echo "<br>";
	
	}

?>
<input type ="submit" name="Calcular";>


    
</form>




</body>
</html>