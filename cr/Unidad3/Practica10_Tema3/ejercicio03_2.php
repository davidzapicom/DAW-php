<?php
// Se accede a la sesión 3
session_name("ejercicio03");
session_start();

// Si alguna posición no está guardada en la sesión, las pone a cero 4
if (!isset($_SESSION["x"]) || !isset($_SESSION["y"])) {
    $_SESSION["x"] = $_SESSION["y"] = 0;
}

// Funciones auxiliares 1
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

// Recogida de accion
$accion   = recoge("accion");

// Dependiendo de la acción recibida, modifica el número guardado 2
if ($accion == "centro") {
    $_SESSION["x"] = $_SESSION["y"] = 0;
} elseif ($accion == "izquierda") {
    $_SESSION["x"] -= 20;
} elseif ($accion == "derecha") {
    $_SESSION["x"] += 20;
} elseif ($accion == "arriba") {
    $_SESSION["y"] -= 20;
} elseif ($accion == "abajo") {
    $_SESSION["y"] += 20;
}

// si sale por un lado, entra por el otro 5
if ($_SESSION["x"] > 200) {
    $_SESSION["x"] = -200;
} elseif ($_SESSION["x"] < -200) {
    $_SESSION["x"] = 200;
}

// si sale por un lado, entra por el otro
if ($_SESSION["y"] > 200) {
    $_SESSION["y"] = -200;
} elseif ($_SESSION["y"] < -200) {
    $_SESSION["y"] = 200;
}

// y vuelve al formulario 6
header("Location:ejericico03_2.php");
?>