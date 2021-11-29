<?php
$fichero = fopen("Prueba.txt", "r");
echo fgets($fichero);
fclose($fichero);
?>