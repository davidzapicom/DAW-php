<?php
if(isset($_POST["boton"])){
    $num=$_POST["Numero"];
    $cont=0;
    $aux=1;

    while($aux<=($num/2)){
        if($num%$aux ==0){
            $cont++;
        }
        $aux++;
    }
    if($cont==1){
        echo "El numero $num es primo <br />";
    }
    else{
        echo "El numero $num no es primo <br />";
    }
    
} else {
    ?>
    <form action="#" method="POST">
        <p>Numero:</p> <input type="text" name="Numero"><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
}
?>