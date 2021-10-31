<?php
if(isset($_POST['boton'])){
    $n=$_POST["n"];
	$primo = 1;
	$contador = 2;
	while($contador <= $n/2 && $primo) {
		if ($n % $contador === 0) {
			$primo = 0;
		}
		$contador++;
	}
	if( $primo ) {
		echo "El numero $n es primo.";
	} else {
        echo "El numero $n no es primo.";
    }
} else {
    ?>
    Introduce un valor numerico:
    <form action="#" method="POST">
        <input type="text" name="n"> <br/>
        <input type="submit" name="boton" value="ENVIAR">
    </form>
<?php
}
?>