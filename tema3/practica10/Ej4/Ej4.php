<?php

// Accedemos a la sesión
session_name("sesiones-1-14");
session_start();

// Si algún contador no está guardado en la sesión, ponemos ambos a cero
if (!isset($_SESSION["a"]) || !isset($_SESSION["b"])) {
    $_SESSION["a"] = $_SESSION["b"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Votar una opción.
    Sesiones (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Votar una opción</h1>

  <form action="sesiones-1-14-2.php" method="get">
    <p>Haga clic en los botones para votar por una opción:</p>

    <table>
      <tr>
        <td style="vertical-align: top;"><button type="submit" name="accion" value="a" style="font-size: 60px; line-height: 50px; color: hsl(200, 100%, 50%);">&#x2714;</button></td>
        <td>
<?php
// Dibujamos la primera barra
print "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "            width=\"$_SESSION[a]\" height=\"50\">\n";
print "            <line x1=\"0\" y1=\"25\" x2=\"$_SESSION[a]\" y2=\"25\" stroke=\"hsl(200, 100%, 50%)\" stroke-width=\"50\" />\n";
print "          </svg>\n";
?>
        </td>
      </tr>
      <tr>
        <td><button type="submit" name="accion" value="b" style="font-size: 60px; line-height: 50px; color: hsl(35, 100%, 50%)">&#x2714;</button></td>
<?php
// Dibujamos la segunda barra
print "        <td>\n";
print "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "            width=\"$_SESSION[b]\" height=\"50\">\n";
print "            <line x1=\"0\" y1=\"25\" x2=\"$_SESSION[b]\" y2=\"25\" stroke=\"hsl(35, 100%, 50%)\" stroke-width=\"50\" />\n";
print "          </svg>\n";
print "        </td>\n";
?>
      </tr>
    </table>

    <p>
      <button type="submit" name="accion" value="cero">Poner a cero</button>
    </p>
  </form>
</body>
</html>
