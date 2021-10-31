<?php
    $nom=$_POST["Nombre"];
    $ap=$_POST["Apellido"];
    $num=$_POST["Telefono"];
    
    echo "El nombre es: $nom <br /> El apellido es: $ap <br /> El telefono es: $num <br />";
    echo "Buenos dias! Son las: " .date("h:i:sa");
?>