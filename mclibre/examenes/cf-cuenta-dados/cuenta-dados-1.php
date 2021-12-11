<?php
/**
 * Cuenta dados - cuenta-dados-1.php
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
    Cuenta dados (Formulario).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuenta dados (Formulario)</h1>

  <form action="cuenta-dados-2.php" method="get">
    <p>Elija un número de dados (entre 2 y 10) y un color.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de dados:</strong></td>
          <td><input type="number" name="cantidad" min="2" max="10" value="6"></td>
        </tr>
        <tr>
          <td><strong>Color:</strong></td>
          <td>
            <select name="color">
              <option value="">...</option>
              <option value="blue">azul</option>
              <option value="red">rojo</option>
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
