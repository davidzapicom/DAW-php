<?php
    session_start();
    $name = $_SESSION['Name'];
    $rol = $_SESSION['rol'];
    if(isset($_SESSION['Name'])) {
        echo '<h3>Hola ' . $name. ' ' .$rol. '.</h3>';
        echo '<a href="logout.php">Logout</a>';
        if($rol == 'consultor') {
            require("consult.php");
        } else if ($rol == 'administrador') {
            require("insert.php");
            require("consult.php");
        }
    } else {
        header("location:index.php");
    }
?>