<?php
/**
 * Ordena cuadrados - ordena-cuadrados-1.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ordena cuadrados (Formulario).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ordena cuadrados (Formulario)</h1>

  <form action="ordena-cuadrados-2.php" method="get">
    <p>Elija un número de cuadrados (entre 4 y 12) y un criterio de ordenación.</p>

    <table>
      <tbody>
        <tr>
          <td><label for="cantidad">Número de cuadrados:</label></td>
          <td><input type="number" name="cantidad" min="4" max="12" value="8" id="cantidad"></td>
        </tr>
        <tr>
          <td><label for="ordenacion">Criterio de ordenación:</label></td>
          <td>
            <select name="ordenacion" id="ordenacion">
              <option value="">...</option>
              <option value="tamaño">Tamaño</option>
              <option value="color">Color</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Mostrar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
