<?php
if(isset($_POST['boton'])){
    $n1 = $_POST['1'];
    $n2 = $_POST['2'];
    $n3 = $_POST['3'];
    $n4 = $_POST['4'];
    $n5 = $_POST['5'];

    $numeros = array($n1, $n2, $n3, $n4, $n5);
    $numerosmax = max($numeros);
    $numerosmin = min($numeros);

    $cant_elementos = count($numeros);
    $suma_elementos = array_sum($numeros);
    $promedio = $suma_elementos/$cant_elementos;

    echo "El máximo es: $numerosmax";
    echo "<br/>El mínimo es: $numerosmin";
    echo "<br/>La media es: $promedio";
} else {
    ?>
    Introduce 5 valores numericos:
    <form action="#" method="POST">
        <input type="number" name="1"> <br/>
        <input type="number" name="2"> <br/>
        <input type="number" name="3"> <br/>
        <input type="number" name="4"> <br/>
        <input type="number" name="5"> <br/>
        <input type="submit" name="boton" value="ENVIAR">
    </form>
<?php
}
?>