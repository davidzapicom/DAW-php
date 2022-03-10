<?php
    session_start();
    if( isset($_SESSION['nombre']) && isset($_SESSION['apellido']) ){
    echo($_SESSION['nombre'] . '<br>' . $_SESSION['apellido'] . '<br>');
    ?>
            <a href="ejercicio3.php">Volver al inicio</a>
    <?php
    }
    else{
        if( !isset($_SESSION['nombre']) && isset($_SESSION['apellido'])){
            echo("Falta el nombre<br>");
            ?>
            <a href="ejercicio3.php">Volver al inicio</a>
    <?php
        }
        else{ if( !isset($_SESSION['apellido']) && isset($_SESSION['nombre'])){
            echo("Falta el apellido<br>");
            ?>
            <a href="ejercicio3.php">Volver al inicio</a>
    <?php
        }
        else{
            echo("Faltan el nombre y apellido<br>");
            ?>
            <a href="ejercicio3.php">Volver al inicio</a>
    <?php
        }
        }
    }
?>