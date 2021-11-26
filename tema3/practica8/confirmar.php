<?php
    session_start();

    echo "<h1>Felicidades</h1>";
    echo "<h2>Usted acaba de adquirir</h2>";




    echo "<h2>Gracias por su compra</h2>";
    echo "<button>Terminar</button>";
    
    if (isset($Terminar)){
        session_destroy();
    }
?>