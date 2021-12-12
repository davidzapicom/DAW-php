<?php
/**
 * Cuenta cartas - cuenta-cartas-1.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta cartas (Formulario).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuenta cartas (Formulario)</h1>

  <form action="cuenta-cartas-2.php" method="get">
    <p>Elija un número de cartas (entre 4 y 15) y la paridad.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de cartas:</strong></td>
          <td><input type="number" name="cantidad" min="4" max="15" value="8">
            <select name="paridad">
              <option value="">...</option>
              <option value="p">Pares</option>
              <option value="i">Impares</option>
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
