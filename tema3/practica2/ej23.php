<?php
$estadios_futbol = array("Barcelona" => "Camp Nou", "Real Madrid" => "Santiago Bernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");


echo "<table border = '1'>";
echo "<tr>";
echo "  <th> Equipo  </th>";
echo "  <th> Estadio </th>";
echo "</tr>";
echo "<tr>";
foreach($estadios_futbol as $valor => $num){
    echo "<tr>  <td>" . $valor . "</td> <td>" . $num ."</td>  </tr>" ;
}
echo "</tr>";
echo "</table>";

unset($estadios_futbol["Real Madrid"]);

echo "<br/>";


echo "<ol>";
echo "Equipo&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estadio";
foreach($estadios_futbol as $valor => $num){
    echo "<li>" . $valor . " -> " . $num .".</li>" ;
}
echo "</ol>";
?>