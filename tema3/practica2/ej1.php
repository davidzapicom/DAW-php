<?php
$coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo $coches[5];

echo "<br/>";

$importe = array(32.583, 11.239, 45.781, 22.237);
echo $importe[1];

echo "<br/>";

$confirmado = array(true, true, false, true, false, false);
echo $confirmado[0];

echo "<br/>";

$jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
echo "La alineación del equipo está compuesta por ";
echo $jugador[0]. ", " .$jugador[1]. ", " .$jugador[2]. ", " .$jugador[3]. " y " .$jugador[4]. ".";
?>