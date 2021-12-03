<?php
if (isset($_POST['anadir'])) {
    $_SESSION['productos'][$_POST['anadir']]["cantidad"]++; 
}

if (isset($_POST['quitar'])) {
    if ($_SESSION['productos'][$_POST['quitar']]["cantidad"] != 0) {
        $_SESSION['productos'][$_POST['quitar']]["cantidad"]--; 
    }
}



?>