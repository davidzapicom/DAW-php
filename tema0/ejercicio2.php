<?php
$num=$_POST["Numero"];
$cont=0;
$aux=1;

while($aux<=($num/2)){
    if($num%$aux ==0){
        $cont++;
    }
    $aux++;
}
if($cont==1){
    echo "El numero $num es primo <br />";
}
else{
    echo "El numero $num no es primo <br />";
}
?>