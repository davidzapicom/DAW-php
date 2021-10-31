<?php
    if(isset($_POST["boton"])){
    ?>
    <form action="ejercicioform2.php" method="POST">
        <?php
            for ($i = 1; $i < $_POST["num"]; $i++){
                ?>
                <p><?php echo"$i"?>
                <input type="text" name= <?php echo "caja$i" ?> ><br/></p>
                <?php
            }
        ?>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
    else{
        ?>
        <form action="ejerciciomatriz1.php" method="POST">
            <p>Cuantas cajas:</p> <input type="text" name="caja"><br>
            <input type="submit" name="boton" value="Enviar">
        </form> 
    <?php
    }
}
?>