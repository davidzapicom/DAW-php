<?php
//stripslashes — Quita las barras de un string con comillas escapadas
$str = "Is your name O\'reilly?";

// Salida: Is your name O'reilly?
echo stripslashes($str);
?>