<?php
    session_start();
    echo("Adiós " . $_SESSION["nombre"]);
    session_destroy();
?>

<html>
    <head>
    </head>
    <body>
        <form action="login.php" method="post">
            Usuario<input type="text" name="nombre" required maxlength="12"/>
            Password<input type="password" name="pass" required maxlength="12"/>
            <input type="submit" name="boton_login" value="Entrar"/>
        </form>
    </body>
</html>