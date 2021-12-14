<?php
	
	//$nombre = $GET["nombre"];
	//$apellido = $GET["apellido"];
	
	if(isset($GET['submit'])){
		
		$nombre = $GET["nombre"];
		$apellido = $GET["apellido"];
	
	if (empty($nombre) || empty($apellido)){
		
		echo "Faltan datos";
		
	}else{

		echo "Tu nombre es " . $nombre . " y te apellidas " . $apellido;
		
	}

	}

?>
