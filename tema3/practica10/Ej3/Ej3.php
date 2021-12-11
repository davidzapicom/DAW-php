<?php

// Accedemos a la sesión
session_name("Ej3");
session_start();

// Si alguna posición no está guardada en la sesión, ponemos los dos valores a cero
if (!isset($_SESSION["x"]) || !isset($_SESSION["y"])) {
    $_SESSION["x"] = $_SESSION["y"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Mover un punto en dos dimensiones.
    Sesiones (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Mover un punto en dos dimensiones</h1>

  <form action="Ej3-2.php" method="get">
    <p>Haga clic en los botones para mover el punto:</p>

    <table>
      <tr>
        <td>
          <table style="float: left">
            <tr>
              <th style="width:70px"></th>
              <th style="width:70px"><button type="submit" name="accion" value="arriba" style="font-size: 60px; line-height: 60px;">&#x1F446;</button></th>
              <th style="width:70px"></th>
            </tr>
            <tr>
              <th><button type="submit" name="accion" value="izquierda" style="font-size: 60px; line-height: 60px;">&#x1F448;</button></th>
              <th><button type="submit" name="accion" value="centro">Volver al<br>centro</button></th>
              <th><button type="submit" name="accion" value="derecha" style="font-size: 60px; line-height: 60px;">&#x1F449;</button></th>
            </tr>
            <tr>
              <th></th>
              <th><button type="submit" name="accion" value="abajo" style="font-size: 60px; line-height: 60px;">&#x1F447;</button></th>
              <th></th>
            </tr>
          </table>
        </td>
        <td>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="400" height="400" viewbox="-200 -200 400 400" style="border: black 2px solid">
<?php
// Dibujamos el círculo en su posición
print "            <circle cx=\"$_SESSION[x]\" cy=\"$_SESSION[y]\" r=\"8\" fill=\"red\" />\n";
?>
          </svg>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
