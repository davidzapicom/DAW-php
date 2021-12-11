<?php

// Accedemos a la sesión
session_name("Ej3");
session_start();

// Si alguna posición no está guardada en la sesión, redirigimos a la primera página
if (!isset($_SESSION["x"]) || !isset($_SESSION["y"])) {
    header("Location:Ej3-2.php");
    exit;
}

// Funciones auxiliares
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

// Recogemos accion
$accion = recoge("accion");

// Dependiendo de la acción recibida, modificamos el número guardado
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

// Si el punto sale por la izquierda o la derecha, entra por el otro lado
if ($_SESSION["x"] > 200) {
    $_SESSION["x"] = -200;
} elseif ($_SESSION["x"] < -200) {
    $_SESSION["x"] = 200;
}

// Si el punto sale por arriba o por abajo, entra por el otro lado
if ($_SESSION["y"] > 200) {
    $_SESSION["y"] = -200;
} elseif ($_SESSION["y"] < -200) {
    $_SESSION["y"] = 200;
}

// Volvemos al formulario
header("Location:Ej3.php");
