<?php
$enlace = mysqli_connect('localhost','root','','control-usuarios');

mysqli_query($enlace, "INSERT INTO usuario (DNI, nombre, apellidos, password)
VALUES ('55555555E', 'JOSE ANTONIO', 'ALVAREZ GARCIA', 'trhsh3@')");

mysqli_close($enlace);
?>