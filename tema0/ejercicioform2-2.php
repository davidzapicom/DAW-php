<?php
if(isset($_POST["boton"])){
    $nom=$_POST["Nombre"];
    $ap=$_POST["Apellido"];
    $num=$_POST["Telefono"];
    
    echo "El nombre es: $nom <br /> El apellido es: $ap <br /> El telefono es: $num <br />";
    echo "Buenos dias! Son las: " .date("h:i:sa");
} else {
    ?>
    <form action="#" method="POST">
        <p>Nombre:</p> <input type="text" name="Nombre"><br>
        <p>Apellido:</p> <input type="text" name="Apellido"><br>
        <p>Telefono:</p> <input type="text" name="Telefono"><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
}
?>