<?php
$fichero = fopen("Prueba.txt", "r");
while( false !== ($caracter = fgetc($fichero))){
    echo $caracter ."<br>";
}
fclose($fichero);
?>