<?php
/**
 * Colores HSL- color-hsl-1.php
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
    Colores HSL.
    Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
  <style>
    p.cuadro { text-align: center; line-height: 100px; vertical-align: middle; font-size: 200%; width: 400px; height: 100px; border: black 2px solid;  }
  </style>
</head>

<body>
  <h1>Colores HSL</h1>

  <p>Haga clic en los botones para cambiar el matiz del color.</p>

  <form action="color-hsl-2.php">
<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
    <p>
      Matiz (Hue):
      <button type="submit" name="accion" value="h--">&lt;&lt;</button>
      <button type="submit" name="accion" value="h-">&lt;</button>
      <button type="submit" name="accion" value="h+">&gt;</button>
      <button type="submit" name="accion" value="h++">&gt;&gt;</button>
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
