<?php
$enlace = mysqli_connect('localhost','root','','control-usuarios');

mysqli_query($enlace, "UPDATE usuario SET apellidos='*' WHERE nombre='ERDANI'");

mysqli_close($enlace);
?>