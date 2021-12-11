<?php
/**
 * Récord de cartas - record-cartas-1.php
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
    Récord de cartas.
    Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Récord de cartas</h1>

  <p>Haga clic en uno de los botones para volver a sacar tres cartas o para volver a empezar.</p>

  <form action="record-cartas-2.php">
<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
    <p>
      <button type="submit" name="accion" value="sacar">Sacar de nuevo</button>
      <button type="submit" name="accion" value="empezar">Volver a empezar</button>
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
