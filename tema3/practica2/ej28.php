<?php
$datos = array(
    array("Familia" => "Simpson", 
    "Padre" => "Hommer", 
    "Madre" => "Marge", 
    "Hijos" => array("Bart","Lisa","Maggie"),
    ),

    array("Familia" => "Griffin", 
    "Padre" => "Peter", 
    "Madre" => "Lois", 
    "Hijos" => array("Chris","Meg","Stewie"),
    )
);

echo "<ul>";
foreach ($datos as $indice => $valor){
    foreach ($valor as $indice2 => $valor2){
        if ($indice2 == "Hijos"){
            foreach ($valor2 as $indice => $valor3){
                echo "<li> $valor3 </li>";
            }
        } else {
            echo "<li> $indice2-> $valor2 </li>";
        }
    }
}
echo "</ul>";
?>