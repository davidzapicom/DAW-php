<?php
$fichero = fopen("Prueba.txt", "a");
fwrite($fichero, "Estoy en clase de php" . PHP_EOL);
fclose($fichero);
?>