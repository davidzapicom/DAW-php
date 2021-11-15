<?php
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];

    echo 'Bienvenid@ ' .$_SESSION["nombre"];



    echo "<h2>Carro:</h2>";
?>
    