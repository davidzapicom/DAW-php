<?php

// Accedemos a la sesión
session_name("Ej2");
session_start();

// Si la posición no está guardada en la sesión, redirigimos a la primera página
if (!isset($_SESSION["posicion"])) {
    header("Location:Ej2-2.php");
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
    $_SESSION["posicion"] = 0;
} elseif ($accion == "izquierda") {
    $_SESSION["posicion"] -= 20;
} elseif ($accion == "derecha") {
    $_SESSION["posicion"] += 20;
}

// Si el punto sale por un lado, entra por el otro
if ($_SESSION["posicion"] > 300) {
    $_SESSION["posicion"] = -300;
} elseif ($_SESSION["posicion"] < -300) {
    $_SESSION["posicion"] = 300;
}

// Volvemos al formulario
header("Location:Ej2.php");
