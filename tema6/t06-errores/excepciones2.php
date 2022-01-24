<h2>Ejemplo con excepciones 2</h2>

<?php
	echo "<p>--- Con el mismo array y la misma función, observemos qué ocurre si 'capturamos' la excepción.</p>";
	
	$pepi = [3,4,5];
	
?>
	<strong>function acceso($a, $b){</br>
		if($b>=count($a))</br>
			throw new Exception "Estás intentando acceder fuera del array";</br>
		else</br>
			return $a[$b];</br>
	}</br></strong>

<?php
	function acceso($a, $b){
			if($b>=count($a))
				throw new Exception("Estás intentando acceder fuera del array</br>");
			else
				return $a[$b];
	}


?>

<p>---Si ejecutamos <strong>echo acceso($pepi,2)</strong>; obtendremos '5'.</p>

<p>---Si ejecutamos acceso($pepi,3) entre un bloque <strong>try-catch</strong>, contendremos el error y podremos gestionarlo como queramos:</p>

	<p><strong>try{</br>
		acceso($pepi,3);</br>
	}	catch(Exception $e) {</br>
		echo "Has intentado acceder a la posición 3 del array \$pepi, así que te has salido del margen.";</br>
		echo "Pero no importa, puedes seguir programando.";</br>
	}</strong></p>

<?php
	try{
		acceso($pepi,3);
	}	catch(Exception $e) {
		echo "Has intentado acceder a la posición 3 del array \$pepi, así que te has salido del margen.</br>";
		echo "Pero no importa, puedes seguir programando.</br>";
	}

	echo "--- ¿Ves? Aquí sigues con tu código...</br>"
?>


