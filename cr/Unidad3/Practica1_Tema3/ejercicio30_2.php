
<?php

	$numero1 = $_POST["numero1"];

	$comprobacion = 0;
	
	for ( $i=1 ; $i < $numero1 ; $i++){
		
		if ($numero1 % $i == 0){
		
			$comprobacion = $comprobacion + $i;
	  
		}
	}

  if ($comprobacion == $numero1){
	  
    echo"El numero " .$numero1." es perfecto";
	
  }else{
	  
    echo"El numero " .$numero1." no es perfecto";
	
  }

?>

