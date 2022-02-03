<h1>Función die()</h1>
<?php
    $a = 5;
    $b=0;
    if($b!=0) {
        $resultado=$a/$b;
        echo $resultado;
    } else {
        die("<p>¡Error! No se puede realizar la operación.</p>");
    }
?>