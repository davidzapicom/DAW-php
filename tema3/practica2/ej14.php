<?php
$contacto = array(
    "Pedro Torres" => "Nombre",
    "C/Mayor, 37" => "Direccion",
    "123456789" => "Telefono"
);
foreach ($contacto as $valor => $elemento){
    echo $elemento . ": " . $valor . "<br/>";
}
?>