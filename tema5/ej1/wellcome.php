<?php
    session_start();
    $name = $_SESSION['Name'];
    $rol = $_SESSION['rol'];
    if(isset($_SESSION['Name'])) {
        echo 'Hola ' . $name. ' ' .$rol. '.<br/>';
        echo '<a href="logout.php">Logout</a>';
        if($rol == 'consultor') {
            require("consult.php");
        } else if ($rol == 'administrador') {
            require("insert.php");
        }
    } else {
        header("location:index.php");
    }
?>