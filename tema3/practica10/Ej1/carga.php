<?php
session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Subir y bajar numeros</h1>
        <h3>Haga click en los botones para modificar su valor.</h3>
        <form action="recarga.php" method="post">
            <button type="submit" name="restar" value="">-</button>
<?php 
    echo "<span> $_SESSION[numero] </span>";
?>
            <button type="submit" name="sumar" value="">+</button>
            <br/>
            <button type="submit" name="cero" value="">Poner a cero</button>
        </form>
    </body>
</html>