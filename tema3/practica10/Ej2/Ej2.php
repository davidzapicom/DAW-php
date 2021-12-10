<?php

// Accedemos a la sesión
session_name("sesiones-1-12");
session_start();

// Si la posición no está guardada en la sesión, ponemos el valor a cero
if (!isset($_SESSION["posicion"])) {
    $_SESSION["posicion"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Mover un punto a derecha e izquierda.
    Sesiones (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Mover un punto a derecha e izquierda</h1>

  <form action="sesiones-1-12-2.php" method="get">
    <p>Haga clic en los botones para mover el punto:</p>

    <table>
      <tr>
        <th>
          <button type="submit" name="accion" value="izquierda" style="font-size: 60px; line-height: 40px;">&#x261C;</button>
          <button type="submit" name="accion" value="derecha" style="font-size: 60px; line-height: 40px;">&#x261E;</button>
        <th>
      </tr>
      <tr>
        <th>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="600" height="20" viewbox="-300 0 600 20">
            <line x1="-300" y1="10" x2="300" y2="10" stroke="black" stroke-width="5" />
<?php
// Dibujamos el círculo en su posición
print "            <circle cx=\"$_SESSION[posicion]\" cy=\"10\" r=\"8\" fill=\"red\" />\n";
?>
          </svg>
        </th>
      </tr>
    </table>

    <p>
      <button type="submit" name="accion" value="centro">Volver al centro</button>
    </p>
  </form>
</body>
</html>
