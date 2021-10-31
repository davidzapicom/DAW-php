<?php
if(isset($_POST["boton"])){
    $num=count($_POST)-1;
    ?>
    <h1>Valores:</h1>
    <form action="ejercicioform3-3.php" method="POST">
        <?php for ($i = 1; $i <= $num; $i++){
                echo '<br/>El valor de la caja ' .$i. ' es '.$_POST["caja$i"];
            }
        ?>
    </form>
    <?php
}
?>