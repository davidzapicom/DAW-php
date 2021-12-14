<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 3 - Tema 10</title>

<meta charset='UTF-8' />

</head>

<?php
// Se accede a la sesión 8
session_name("ejercicio03");
session_start();

// Si alguna posición no está guardada en la sesión, las pone a cero 9
if (!isset($_SESSION["x"]) || !isset($_SESSION["y"])) {
    $_SESSION["x"] = $_SESSION["y"] = 0;
}
?>

<!DOCTYPE html>
// ...
        <td>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
          width="400" height="400" viewbox="-200 -200 400 400" style="border: black 2px solid">

<?php
// Dibuja el círculo en su posición 7
echo "            <circle cx=\"$_SESSION[x]\" cy=\"$_SESSION[y]\" r=\"8\" fill=\"red\" />\n";
?>

  </svg>
  </td>