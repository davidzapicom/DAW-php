<?php
$numeros = array(
    "Elemento 1" => 3,
    "Elemento 2" => 2,
    "Elemento 3" => 8,
    "Elemento 4" => 123,
    "Elemento 5" => 5,
    "Elemento 6" => 1
);
asort($numeros);

echo "<table border = '1'>";
echo "<tr>";
echo "  <th> Elemento  </th>";
echo "  <th> Valor </th>";
echo "</tr>";
echo "<tr>";
foreach($numeros as $valor => $num){
    echo "<tr>  <td>" . $valor . "</td> <td>" . $num ."</td>  </tr>" ;
}
echo "</tr>";
echo "</table>";
?>