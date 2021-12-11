<?php
/**
 * Solitario de tres cartas- solitario-3-cartas-1.php
 *
 * @author Escriba aquí su nombre
 *
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Solitario de tres cartas.
    Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Solitario de tres cartas</h1>

  <p>Haga clic en una de las cartas para cambiarla (como mucho puede hacer tres cambios).</p>

  <p>Haga clic en el botón "Terminar" para indicar que no quiere cambiar ninguna más.</p>

  <p>Haga clic en el botón "Nueva partida" para volver a empezar.</p>

  <form action="solitario-3-cartas-2.php">

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

    <p>
      <button type="submit" name="accion" value="terminar">Terminar</button>
      <button type="submit" name="accion" value="nueva">Nueva partida</button>
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
