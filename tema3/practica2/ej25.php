<?php
$num = array(5 => 1, 12 => 2, 13 => 56, "x" => 42);
var_dump($num);
echo "<br/>El array tiene count($num) elementos.";
unset($num["5"]);
echo "<br/>";
var_dump($num);
unset($num);
var_dump($num);
?>