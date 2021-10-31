<?php
$idiomas[0][0] = 1; $idiomas[0][1] = 14; $idiomas[0][2] = 8; $idiomas[0][3] = 3;
$idiomas[1][0] = 6; $idiomas[1][1] = 19; $idiomas[1][2] = 7; $idiomas[1][3] = 2;
$idiomas[2][0] = 3; $idiomas[2][1] = 13; $idiomas[2][2] = 4; $idiomas[2][3] = 1;


for ($i = 0; $i < $idiomas; $i++) {
    for ($j = 0; $j < $idiomas; $j++) {
        for ($x = 0; $x < $idiomas; $x++) {
            echo $idiomas[$i][$j][$x];
        }
        echo("");
    }
    echo("");
}
var_dump($T);
?>