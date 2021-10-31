<?php
if(isset($_POST["boton"])){
    $i;
    $suma = 0;
    $n = $_POST["n"];

    for ($i = 1; $i < $n; $i++) {  // i son los divisores. Se divide desde 1 hasta n-1                            
        if ($n % $i == 0) {
            $suma = $suma + $i;   // si es divisor se suma
        }
    }
    if ($suma == $n) {           // si el numero es igual a la suma de sus divisores es perfecto                
        echo "Perfecto";
    } else {
        echo "No es perfecto";

    }
} else {
    ?>
    <form action="#" method="POST">
        Numero:<input type="text" name="n">
        <input type="submit" name="boton" value="ENVIAR">
    </form>
    <?php  
}
?>