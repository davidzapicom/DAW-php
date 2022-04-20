<?php
session_start();
$simbolosNumero = 8;  
 $_SESSION["monedas"] = 0;
 $_SESSION["fruta1"] = rand(1, $simbolosNumero);
 $_SESSION["fruta2"] = rand(1, $simbolosNumero);
 $_SESSION["fruta3"] = rand(1, $simbolosNumero);
 $_SESSION["premio"] = 0;
 $_SESSION["error"]= "";
 header("Location:tragaperras.php");
?>