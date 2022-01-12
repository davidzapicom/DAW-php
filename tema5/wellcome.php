<?php
    session_start();
    if(isset($_SESSION['User'])) {
        echo ' Wellcome ' . $_SESSION['User']. $_SESSION['Rol'].'<br/>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        header("location:index.php");
    }
?>