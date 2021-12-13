<?php
$fichero = fopen("primero.txt", "r");
echo fread($fichero, filesize("primero.txt")) ;
fclose($fichero);

$fichero2 = fopen("segundo.txt", "r");
echo fread($fichero2, filesize("segundo.txt")) ;
fclose($fichero2);

$fichero = fopen("Prueba.txt", "a");
fwrite($fichero, "Estoy en clase de php" . PHP_EOL);
fclose($fichero);


?>