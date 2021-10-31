<?php
if(isset($_POST["boton"])){
    $horas=$_POST["Horas"];
    $salario = 12;

    //determina numero de horas extra.
    if ($horas > 40){
        $horasextra = $horas - 40;
    }

    //horas extra <= 8 * 2. Sino horas extra >8 entonces primeras 8 * 2 y después *3
    if ($horasextra < 9){
        $salex = ($horasextra * $salario) * 2;
    } else {
        $salarioextra = (8 * $salario) * 2;
        
        $horasextraplus = $horasextra - 8;
        $salarioextraplus = ($horasextraplus*$salario)*3;

        $salex = $salarioextra + $salarioextraplus; 
    }

    //salario horas ordinarias (hasta 40)
    $ordinariastotal =  ($horas - $horasextra) * 12;

    //salario total -> horas ordinarias + horas extra
    $salariototal = $salex + $ordinariastotal;

    if ($horasextra <= 8){
        echo "El numero de horas ordinarias: 40 a 12€/h que es $ordinariastotal, más las horas extra que son $horasextra a 24€/h.<br/> El salario total es: $salariototal €.";
    } else {
        echo "El numero de horas ordinarias: 40 a 12€/h más las horas extra que son $horasextra a 24€/h hasta la numero 8 y en adelante a 36€/h.<br/> El salario total es: $salariototal €.";
    }

} else {
    ?>
    <form action="#" method="POST">
        Introduce el numero de horas trabajadas: <input type="text" name="Horas">
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php  
}
?>