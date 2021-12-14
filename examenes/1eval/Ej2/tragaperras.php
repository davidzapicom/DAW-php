<?php
session_name("tragaperras");
session_start();

$simNum = 8;

if (!isset($_SESSION["monedas"]) || !isset($_SESSION["fruta1"]) ||
    !isset($_SESSION["fruta2"]) || !isset($_SESSION["fruta3"])) {
    $_SESSION["monedas"] = 0;
    $_SESSION["fruta1"] = rand(1, $simNum);
    $_SESSION["fruta2"] = rand(1, $simNum);
    $_SESSION["fruta3"] = rand(1, $simNum);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Tragaperras</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
print "  <form action=\"tragaperras2.php\" method=\"post\">\n";
print "    <table style=\"border: black 4px solid; border-spacing: 10px;\">\n";
print "      <tbody>\n";
print "        <tr>\n";
print "          <td style=\"border: black 4px solid; padding: 10px\"> <img src=\"img/frutas/$_SESSION[fruta1].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "          <td style=\"border: black 4px solid; padding: 10px\"> <img src=\"img/frutas/$_SESSION[fruta2].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "          <td style=\"border: black 4px solid; padding: 10px\"> <img src=\"img/frutas/$_SESSION[fruta3].svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "        </tr>\n";
print "      </tbody>\n";
print "    </table>\n";
print "   <p><button type=\"submit\" name=\"accion\" value=\"moneda\">Meter moneda</button></p>\n";
print "   <p>$_SESSION[monedas]</p>\n";
print "   <p><button type=\"submit\" name=\"accion\" value=\"jugar\">Jugar</button></p>\n";
print     $_SESSION["premio"]. "   " .$_SESSION["aviso"];
print "   \n<p><button type=\"submit\" name=\"accion\" value=\"reiniciar\">Reiniciar juego</button></p>\n";

print "  </form>\n";
?>
</body>
</html>