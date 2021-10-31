<?php
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($x = 0; $x < 2; $x++) {
            $T[$i][$j][$x] = rand(1,10);
        }
        echo("");
    }
    echo("");
}
var_dump($T);
echo "<br/>El array multidimensional T tiene dimension " .count($T). " x " .count($T[0]). " x " .count($T[0][0]);




echo "<br/><br/><br/>";

for ($j = 0; $j < 3; $j++) {
        $T[0][$j] = rand(1,10);
} 
$T[1] = "hola";
$T[2] = 57;
var_dump($T);
?>