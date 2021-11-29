<?php
$fichero = fopen("Prueba.txt", "r");
while (!feof($fichero)) {
    echo fgets($fichero) ."<br>";
}
fclose($fichero);
?>