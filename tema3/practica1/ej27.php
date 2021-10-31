<?php
for ($i = 2; $i <= 50; $i++) {
	$primo = 1;
	$contador = 2;
	while($contador <= $i/2 && $primo) {
		if ($i % $contador === 0) {
			$primo = 0;
		}
		$contador++;
	}
	if( $primo ) {
		echo "$i ";
	}
}
?>