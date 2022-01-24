<h2>Ejemplo con errores</h2>

<?php
	echo "<p>--- Sigamos con el mismo array y la misma función.</p>";
	
	$pepi = [3,4,5];

	echo "<p>--- Para trabajar con errores, debemos definir una función que se encargue de gestionarlos. Pongamos que, en nuestro caso, se llama gestiono_mi_error()</p>";
	echo "<p>--- Por ejemplo:</p>";
	
?>
	<strong>function gestiono_mi_error($numero_error,$texto_error){</br>
		echo "Has cometido el error ".$numero_error." cuya descripción es ".$texto_error;</br>
	}</br></strong>

<?php
	echo "<p>--- Una vez definida, debemos indicarle al sistema que será esa, y no otra, la función que maneje el error. Eso se hace con la función set_error_handler(); en nuestro caso, así:</p>";
?>

	<strong>set_error_handler("gestiono_mi_error");</br></strong>


<?php
	function gestiono_mi_error($numero_error,$texto_error){
		echo "Has cometido el error ".$numero_error." cuya descripción es ".$texto_error;
	}
		
	set_error_handler("gestiono_mi_error");
?>

<?php
	echo "<p>--- Veámoslo en funcionamiento.</p>";
	echo "<p>--- Definamos, como antes, la función acceso(\$a,\$b):</p></br>";
?>
	<strong>
	function acceso($a, $b){</br>
			if($b>=count($a))</br>
			trigger_error("Estás intentando acceder fuera del array");</br>
			else</br>
				return $a[$b];</br>
	}</strong></br></br>



<p>--- Si ejecutamos echo acceso($pepi,2); obtendremos '5'.</p>

<p>--- Si ejecutamos acceso($pepi,3) comprobando el error con trigger_error, podremos gestionarlo como queramos (igual que ocurre con las excepciones).</p>

<p>--- Digamos que, en cierto modo, los errores son la versión no orientada a objetos de las excepciones</p>:

<?php
		
	function acceso($a, $b){
			if($b>=count($a))
				trigger_error("Estás intentando acceder fuera del array</br></br></br>");
			else
				return $a[$b];
	}

	acceso($pepi,3);

	echo "--- Pero puedes seguir programando!"
?>


