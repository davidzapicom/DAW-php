<?php
session_name("tragaperras");
session_start();

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

$simNum = 8;

if (!isset($_SESSION["monedas"]) || !isset($_SESSION["fruta1"]) ||
    !isset($_SESSION["fruta2"]) || !isset($_SESSION["fruta3"]) || !isset($_SESSION["premio"])) {
    $_SESSION["monedas"] = 0;
    $_SESSION["fruta1"] = rand(1, $simNum);
    $_SESSION["fruta2"] = rand(1, $simNum);
    $_SESSION["fruta3"] = rand(1, $simNum);
    $_SESSION["premio"] = 0;
}

$accion  = recoge("accion");

if ($accion == "moneda") {
    $_SESSION["monedas"] += 1;
}

if ($accion == "jugar" && $_SESSION["monedas"] > 0) {
    $_SESSION["fruta1"] = rand(1, $simNum);
    $_SESSION["fruta2"] = rand(1, $simNum);
    $_SESSION["fruta3"] = rand(1, $simNum);

    $_SESSION["monedas"] -= 1;

    if ($_SESSION["fruta1"] && $_SESSION["fruta2"] && $_SESSION["fruta3"]) {
        $_SESSION["premio"] += 5;
        $_SESSION["aviso"] = "ENHORABUENA!!! ha ganado 5 puntos.";
    
    } elseif (($_SESSION["fruta1"] && $_SESSION["fruta2"]) ||
        ($_SESSION["fruta2"] && $_SESSION["fruta3"]) ||
        ($_SESSION["fruta1"] && $_SESSION["fruta3"])) {
        $_SESSION["premio"] += 2;
        $_SESSION["aviso"] = "ENHORABUENA!!! ha ganado 2 puntos.";
    } else {
        $_SESSION["premio"] += 0;
    }
}

if ($_SESSION["monedas"] == 0) {
    $_SESSION["aviso"] = "No tiene saldo, pulse el botón reiniciar juego.";
}

if ($accion == "reiniciar") {
    $_SESSION["monedas"] = 0;
    $_SESSION["premio"] = 0;
    $_SESSION["aviso"] = null;
}

header("Location:tragaperras.php");
?>
