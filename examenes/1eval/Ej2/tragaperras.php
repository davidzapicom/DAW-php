<?php

session_start();

$simbolosNumero = 8;  
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tragaperras
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
<?php
echo "  <form action=\"tragaperras2.php\" method=\"post\">\n";
echo "    <table style=\"border: black 4px solid; border-spacing: 10px;\">\n";
echo "        <tr>\n";
echo "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/$_SESSION[fruta1].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
echo "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/$_SESSION[fruta2].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
echo "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/$_SESSION[fruta3].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
echo "          </table>";
echo "            <p><button type=\"submit\" name=\"accion\" value=\"moneda\">Meter moneda</button></p>\n";
echo "            <input type='text' value='$_SESSION[monedas]'>\n";
echo "            <p><button type=\"submit\" name=\"accion\" value=\"jugar\">Jugar</button></p>\n";
echo "            <input type='text' value='$_SESSION[premio]'> <input type='text' size=50 value='$_SESSION[error]'>\n";
echo "            <p><button type=\"submit\" name=\"accion\" value=\"reiniciar\">Reinicar juego</button></p>\n";
echo "  </form>\n";
?>
