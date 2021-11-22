<?php
session_start();
$ape = $_POST['apellido'];
echo '<p>El usuario se llama ' .$_SESSION["nombre"].' '.$ape.'</p>';
session_destroy();
?>