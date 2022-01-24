<h2>Ejemplo con excepciones</h2>

<?php
	echo "<p>--- Supongamos el array anterior.</p>";
	
	$pepi = [3,4,5];
	
	echo "<p>--- Supongamos que la función acceso(\$a,\$b) devuelve \$a[\$b]</p>";

	echo "<p>--- Tendrá esta implementación:</p>";
	?>

	<p><strong>function acceso($a, $b){</br>
		if($b>=count($a))</br>
			throw new Exception "Estás intentando acceder fuera del array";</br>
		else</br>
			return $a[$b];</br>
	}</strong></p>

<?php
	function acceso($a, $b){
			if($b>=count($a))
				throw new Exception("Estás intentando acceder fuera del array</br>");
			else
				return $a[$b];
	}


?>

<p>Si ejecutamos echo acceso($pepi,2); obtendremos '5'.</p>

<p>Si ejecutamos echo acceso($pepi,3); obtendremos el siguiente mensaje y la aplicación "se romperá" (no seguirá ejecutándose)</p>

<?php
	echo acceso($pepi,3);
	echo "Ya que el índice 3 se sale del array.";
?>


