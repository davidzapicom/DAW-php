<?php
$n1 = rand(1,100);
$n2 = rand(1,100);

if ($n1 > $n2) {
    echo "El numero 1= $n1 es mayor que el numero 2= $n2 .";
} else {
    echo "El numero 2= $n2 es mayor que el numero 1= $n1 .";
}

if ($n1%2==0 ){
    echo "<br/> El 1= $n1 es par.";
}else{
    echo "<br/> El 1= $n1 es impar.";
}

if ($n2%1==0 ){
    echo "<br/> El 2= $n2 es par.";
}else{
    echo "<br/> El 2= $n2 es impar.";
}
?>