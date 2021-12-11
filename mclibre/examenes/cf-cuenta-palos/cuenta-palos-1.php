<?php
/**
 * Cuenta palos - cuenta-palos-1.php
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
    Cuenta palos (Formulario).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuenta palos (Formulario)</h1>

  <form action="cuenta-palos-2.php" method="get">
    <p>Elija un número de cartas (entre 3 y 7) y dos palos.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de cartas:</strong></td>
          <td><input type="number" name="cantidad" min="3" max="7" value="5"></td>
        </tr>
        <tr>
          <td><strong>Palo 1:</strong></td>
          <td>
            <select name="palo1">
              <option value="">...</option>
              <option value="c">Corazones</option>
              <option value="d">Rombos</option>
              <option value="p">Picas</option>
              <option value="t">Tréboles</option>
            </select>
          </td>
        </tr>
        <tr>
        <td><strong>Palo 2:</strong></td>
          <td>
            <select name="palo2">
              <option value="">...</option>
              <option value="c">Corazones</option>
              <option value="d">Rombos</option>
              <option value="p">Picas</option>
              <option value="t">Tréboles</option>
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
