<?php
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];

    echo 'Bienvenid@ ' .$_SESSION["nombre"];
?>