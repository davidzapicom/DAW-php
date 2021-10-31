<?php
$enteros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$array = count($enteros);
for ($i = 0; $i <= $array; $i+=2){
    $acumulador+=$array[$i];
    echo $array[$i];
}
//$media = $acumulador/$array;



/*echo "La suma es: " .$acumulador;
echo "La media es: " .$media;
for ($i = 1; $i < $array; $i+=2){
    print $array[$i];
}*/
?>