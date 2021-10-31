<?php
$num1 = 8;
$num2 = 16;
$total;

if ($num1 == $num2){
    $total = $num1*$num2;
    
} else if($num1 > $num2){
    $total = $num1 - $num2; 
} else{
    $total = $num1 + $num2;
}

echo $total;
?>