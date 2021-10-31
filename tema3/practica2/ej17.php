<?php
$nombre = array("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");

echo "El array tiene " .count($nombre). " elementos.";
echo "<ul>";
echo "Lista:";
foreach ($nombre as $elemento) {
    echo "<li>" .$elemento. "</li>";
}
echo "</ul>";
?>