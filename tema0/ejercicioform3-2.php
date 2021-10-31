<?php
if(isset($_POST["boton"])){
    $num=$_POST["caja"];
    ?>
    <form action="ejercicioform3-3.php" method="POST">
         <?php for ($i = 1; $i <= $num; $i++){
            ?>
                Caja <?php echo $i ?>
                <input type="text" name="caja<?php echo $i ?>"><br>
            <?php
        }
        ?>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php
} else {
    ?>
    <form action="#" method="POST">
        <p>Cuantas cajas:</p> <input type="text" name="caja"><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
}
?>