<?php
/**
 * Reparte cartas - reparte-cartas-1.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Reparte cartas (Formulario).
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Reparte cartas (Formulario)</h1>

  <form action="reparte-cartas-2.php" method="get">
    <p>Elija un número de jugadores y un número de cartas (entre 1 y 13).</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de jugadores:</strong></td>
          <td>
            <select name="jugadores">
              <option value="">...</option>
              <option>Uno</option>
              <option>Dos</option>
              <option>Tres</option>
              <option>Cuatro</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><strong>Número de cartas:</strong></td>
          <td><input type="number" name="cartas" min="1" max="13"></td>
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
