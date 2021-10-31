<?php
if(isset($_POST["boton"])){
    ?>
    <form action="#" method="POST">
    <?php 
        $a = $_POST["cajaA"];
        $b = $_POST["cajaB"];
        $suma = $a + $b;
        echo "la suma de $a + $b es $suma";

} else {
    ?>
    <form action="#" method="POST">
        A:<input type="text" name="cajaA">
        B:<input type="text" name="cajaB">
        <input type="submit" name="boton" value="ENVIAR">
    </form>
    <?php  
}
?>