<?php
    session_start();
    if(isset($_SESSION['Name'])) {
        echo 'Hola ' . $_SESSION['Name'].'<br/>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        header("location:index.php");
    }
?>