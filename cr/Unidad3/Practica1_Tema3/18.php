if (isset($GET['nombre')){
	
	$nombre = $GET["nombre"];
	$apellido = $GET["apellido"];
	
	if (empty($nombre) || empty($apellido)){
		
		echo "Faltan datos";
		
	}else{

		"Tu nombre es " . $nombre . " y te apellidas " . $apellido;
		
	}
	
}else{
	
	
	
	