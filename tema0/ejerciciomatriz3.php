<?php
if(isset($_POST["boton"]) || isset($_POST["boton2"])){
    if(isset($_POST["boton2"])){
        ?>
        <h1>Valores:</h1>
        <?php 
            echo "el vector tiene $i elementos";
            $num=sqrt(count($_POST)-1);
            for ($i = 1; $i <= $num; $i++){
                for ($j = 1; $j <= $num; $j++){
                    $valores = $_POST["$i$j"];
                    echo "<br/>El valor de la caja  $i$j es $valores";
                }
            }
        } else {
            var_dump($_POST);
            ?>
            <form action="#" method="POST">
            <?php 
            $num=$_POST["caja"];
            var_dump($num);
            var_dump($_POST["caja"]);
                for ($i = 1; $i <= $num; $i++){
                    echo " <br/>   <br/>";
                    for ($j = 1; $j <= $num; $j++){
            ?>
                    <input type="text" name="<?php echo "$i$j" ?>">
                <?php
                    }
                }
                echo " <br/>   <br/>";
            ?>
            <input type="submit" name="boton2" value="Enviar">
        </form>
            <?php  
        }
} else {
    ?>
    <form action="#" method="POST">
        <input type="text" name="caja">
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
}
?>