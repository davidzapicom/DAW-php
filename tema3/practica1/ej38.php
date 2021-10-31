<?php
if(isset($_POST["boton"]) || isset($_POST["boton2"])){
    if(isset($_POST["boton2"])){
        $vector = count($_POST);
        echo "el vector tiene $vector elementos";
        $n = count($_POST)-1;

        $total = 0;
            for ($i = 0; $i < $n; $i++){
                $valores = $_POST["$i"];
                echo "<br/>$i = $valores";
                $total = $total + $valores;
            }
        echo "<br/>la suma es $total";

    } else {
        ?>
        <form action="#" method="POST">
        <?php 
        $n=$_POST["n"];
        for ($i = 0; $i < $n; $i++){
            echo "<br/> $i";
        ?>
        <input type="text" name="<?php echo "$i" ?>">
        <?php
        }
        ?>
        <br/><input type="submit" name="boton2" value="Enviar">
        </form>
        <?php  
    }
}?>
<form action="#" method="POST">
    Numero de Elementos:<input type="text" name="n">
    <input type="submit" name="boton" value="Aceptar">
</form>