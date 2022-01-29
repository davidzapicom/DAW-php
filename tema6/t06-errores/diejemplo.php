<h1>Función die()</h1>
<?php
	echo "<p>--- Soy un ejemplo muy tonto.</p>";

	echo "<p>--- voy a declarar el siguiente array: <strong>\$pepi = [3,4,5];</strong> </p>";

	$pepi = [3,4,5];


	echo "<p>--- dicho array solo tiene 3 posiciones (0, 1 y 2).</p>";

	echo "<p>--- así que si lo imprimo con "?>var_dump($pepi)<?php echo " obtendré... </p>";

	var_dump($pepi);

	echo "<p>--- ¿Qué pasa si intento acceder a la posición 1?";

	echo "que la función"?> print_r($pepi[1]); <?php echo "devuelve el valor 4.";

	echo "<p>--- ¿Qué pasa si intento acceder a la posición 9?";

	echo "que la función"?> print_r($pepi[9]); <?php echo "devuelve...</p>";

	print_r($pepi[9]);

	echo "<p>--- Puedo detener la ejecución del programa siguiente código:</br></br>" ?>

		<p><strong>if($pepi[9])</br>
			print_r($pepi[9])</br>
		else</br>
			die('No puedes acceder a esa posición, ¡no existe!');</br>
		</p></strong>
	<?php
	echo "<p>--- Como se muestra a continuación:</p>";

		if($pepi[9])
			print_r($pepi[9]);
		else
			die("<p>No puedes acceder a esa posición, ¡no existe!</p>");

	echo "</p>";

	echo "<p>--- Además, nada de lo que escribas después se ejecutará.";
?>

