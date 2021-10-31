<?php
if(isset($_POST["boton"])){
    $num = $_POST["n1"];
    $power = $_POST["n2"];

    echo " $num elevado a $power es: ";
    echo pow($num, $power);

  
} else {
    ?>
    <form action="#" method="POST">
        Numero:<input type="text" name="n1">
        Potencia:<input type="text" name="n2">
        <input type="submit" name="boton" value="ENVIAR">
    </form>
    <?php  
}
?>