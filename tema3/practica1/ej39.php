<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 39 - Víctor Emmanuel Molinas</title>
</head>
<body>
  <h1>Ejercicio 39</h1>
  <h2>Cargar una lista variable de elementos asignados por el usuario e imprimir su sumatoria, dejando los datos enviados en las cajas de texto</h2>
  <br /><br />
  <h3>SOLUCIÓN</h3>

  <?php
  if (isset($_POST["enviar"])) {
    $suma = 0;
    echo "El vector tiene " . (count($_POST) - 1) . " elementos." . "<br/>";
    for ($i = 1; $i <= (count($_POST) - 1); $i++) {
      echo $i . " = " . $_POST["valor$i"] . "<br/>";
      $suma += $_POST["valor$i"];
    }
    echo "La suma total es: " . $suma . "<br/><br/>";
  };
  ?>

  <form action="" method="POST">
    <div>
      <label>
        Número de elementos:
        <input type="number" name="total" value="<?php if (isset($_POST["aceptar"])) {
                                                    echo $_POST["total"];
                                                  } elseif (isset($_POST["enviar"])) {
                                                    echo (count($_POST) - 1);
                                                  } ?>" />
      </label>
    </div>
    <div>
      <input type="submit" name="aceptar" value="Aceptar" />
    </div>
  </form>
  <br /><br /><br /><br />


  <?php
  if (isset($_POST["aceptar"]) || isset($_POST["enviar"])) {
    if (isset($_POST["aceptar"])) {
      $total = $_POST["total"];
    } else if (isset($_POST["enviar"])) {
      $total = (count($_POST) - 1);
    }
    ?>
    <form action="" method="POST">
      <?php
        for ($i = 1; $i <= $total; $i++) {
          echo $i; ?>:
      <input type="number" name=<?php echo "valor$i"; ?> value="<?php if (isset($_POST["enviar"])) echo $_POST["valor$i"]; ?>" /><br /><br>
    <?php
      };
      ?>
    <br />
    <div>
      <input type="submit" name="enviar" value="Enviar" />
    </div>
    </form>
  <?php }
  ?>
</body>
</html>