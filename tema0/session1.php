<?php
//Se inicia la sesión.
session_start();
echo '<p>Se acaba de iniciar la sesión</p>';
?>

<form action="session2.php" method="POST">
    Nombre: <input type="text" name="$_SESSION['nombre']">
    <input type="submit" name="boton" value="Enviar">
</form>