<?php
if(isset($_POST["Par"]) || isset($_POST["Impar"])){
        $n = $_POST["n"];

        if ($_POST["Par"]) {
            for ($i = 0; $i <= $n; $i+=2){
                echo "$i ";
            }
        }

        if ($_POST["Impar"]) {
            for ($i = 1; $i <= $n; $i+=2){
                echo "$i ";
            }
        }
        ?>
        <form action="#" method="POST">
            A:<input type="text" name="<?php echo "$n" ?>">
            <br/>
            <input type="submit" name="Par" value ="Par">
            <input type="submit" name="Impar" value ="Impar">
    
        </form>
    <?php
} else {
    ?>
    <form action="#" method="POST">
        Numero:<input type="text" name="n">
        <br/>
        <input type="submit" name="Par" value ="PAR">
        <input type="submit" name="Impar" value ="IMPAR">
 
    </form>
    <?php  
}
?>