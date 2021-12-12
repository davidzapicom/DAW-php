<?php
/**
 * Descubra dibujos - matrices-1-14-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2021 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2021-12-03
 * @link      https://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

session_name("matrices-1-14");
session_start();

$caracterMinimo = 128336;
$caracterMaximo = 128359;
$_SESSION["numeroDibujos"] = 7;

if (!isset($_SESSION["dibujos"])) {
    for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
        $_SESSION["dibujos"][$i] = mt_rand($caracterMinimo, $caracterMaximo);
        $_SESSION["destapados"][$i] = false;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descubra dibujos.
    Matrices (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
  <style>
    button { background-color: hsl(240, 100%, 98%); padding: 0; border: none;}
  </style>
</head>

<body>
<?php
$destapados = 0;
for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
    if ($_SESSION["destapados"][$i]) {
        $destapados += 1;
    }
}
print "  <h1>$destapados dibujos visibles y " . (count($_SESSION["dibujos"]) - $destapados) . " dibujos ocultos</h1>\n";
print "\n";
print "  <p>Haga clic en un dibujo para mostrarlo u ocultarlo.</p>\n";
print "\n";
print "  <form action=\"matrices-1-14-2.php\">\n";
print "    <p>\n";
for ($i = 0; $i< $_SESSION["numeroDibujos"]; $i++) {
    print "      <button name=\"invierte\" value=\"$i\" style=\"font-size: 4rem; width: 6rem;\">\n";
    if ($_SESSION["destapados"][$i]) {
        print "        &#" . $_SESSION["dibujos"][$i] . ";\n";
    } else {
        print "        &#10067;\n";
    }
    print "      </button>\n";
}
print "    </p>\n";
print "  </form>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2021-12-03">3 de diciembre de 2021</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>
</html>
