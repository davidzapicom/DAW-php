<?php
// Accedemos a la sesión
session_name("Ej1");
session_start();

// Si el número no está guardado en la sesión, ponemos el valor a cero
if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Subir y bajar número.
    Sesiones (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Subir y bajar número</h1>

  <form action="Ej1-2.php" method="get">
    <p>Haga clic en los botones para modificar el valor:</p>

    <p>
      <button type="submit" name="accion" value="bajar" style="font-size: 4rem">-</button>
<?php
// Mostramos el número, guardado en la sesión
print "      <span style=\"font-size: 4rem\">$_SESSION[numero]</span>\n";
?>
      <button type="submit" name="accion" value="subir" style="font-size: 4rem">+</button>
    </p>

    <p>
      <button type="submit" name="accion" value="cero">Poner a cero</button>
    </p>
  </form>
</body>
</html>
