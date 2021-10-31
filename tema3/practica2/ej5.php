<?php 
$enteros = array( 
    array(4,6,8,1,3), 
    array(0,4,1,6,9), 
    array(5,1,7,8,2) 
); 

    echo "<table border width='400' height='200'>";  
    foreach ($enteros as $value) { 
        echo "<tr>";  
        foreach ($value as $result) { 
            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result</td>"; 
            
        } 
        echo "</tr>"; 
    } 
    echo "</table>";  


    
    echo "<ul>";
    echo "<br/><li>Elementos por fila: ";
    for ($j = 0; $j < 3; $j++){
        for ($i = 0; $i < 5; $i++){
            $filas = $enteros[$j][$i];
            echo "$filas " ;
        }
    }

    echo "<br/><li>Elementos por columna: ";
    for ($j = 0; $j < 5; $j++){
        for ($i = 0; $i < 3; $i++){
            $columnas = $enteros[$i][$j];
            echo "$columnas ";
        }
    }
    echo "<ul/>";

?>