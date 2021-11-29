<?php
$fichero = fopen("Prueba.txt", "r");
echo fread($fichero, filesize("Prueba.txt")) ;
fclose($fichero);
?>