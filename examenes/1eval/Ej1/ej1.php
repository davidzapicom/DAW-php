<?php
$primero = fopen('primero.txt', 'r');
$i=0;
while (false !== ($carácter = fgetc($primero))) {
   $palabras[0][$i]=$carácter;
   $i++;
}
fclose($primero);

$segundo = fopen('segundo.txt', 'r');
$y=0;
while (false !== ($carácter = fgetc($segundo))) {
   $palabras[1][$y]=$carácter;
   $y++;
}
fclose($segundo);
echo "El primer fichero contiene: ";
for ($i=0; $i < 9; $i++) { 
    echo  $palabras[0][$i].",";
}
echo "<br/>";
echo "El Segundo fichero contiene: ";

for ($i=0; $i < 9; $i++) { 
    echo  $palabras[1][$i].",";
}
echo "<br/>";
echo "Los fichero intercalados contienen: ";
for ($i=0; $i < 9; $i++) { 
    echo  $palabras[0][$i].",";
    echo  $palabras[1][$i].",";
}
?>