<?php
if(isset($_POST["boton"])){
    $vector = count($_POST);
        echo "el vector tiene $vector elementos";
        $total = 0;
            for ($i = 0; $i < 9; $i++){
                $valores = $_POST["$i"];
                echo "<br/>$i = $valores";
                $total = $total + $valores;
            }
        echo "<br/>la suma es $total";
    }
    ?>
<form action="#" method="POST">
    <?php 
    for ($i = 0; $i < 9; $i++){
        echo "<br/> ";
        echo "$i ";
    ?>
    <input type="text" name='<?php echo "$i" ?>' value='<?php if (isset($_POST["boton"])){
        echo "$i";
        }?>'>
    <?php
    }
    ?>
    <br/><input type="submit" name="boton" value="Enviar">
</form> 