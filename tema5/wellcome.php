<?php
    session_start();
    if(isset($_SESSION['User'])) {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        header("location:index.php");
    }
?>