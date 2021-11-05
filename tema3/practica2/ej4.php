<?php
$listado = array(
    array(1, 30, 50, 35),
    array(6, 18, 15, 95),
    array(8, 66, 50, 82),
    array(3, 71, 50, 41),
);

	for ($fila = 0; $fila < 5; $fila++) {
		$acumulador+=$matriz[$fila][$fila];
	}
	echo "La suma total de la diagonal principal es: $acumulador";

?>