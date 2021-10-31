<?php
if(isset($_POST["Suma"]) || isset($_POST["Resta"]) || isset($_POST["Mult"]) || isset($_POST["Division"])){
        $a = $_POST["cajaA"];
        $b = $_POST["cajaB"];

        if ($_POST["Suma"]) {
            $suma = $a + $b;
            echo "$a + $b es $suma";
        }

        if ($_POST["Resta"]) {
            $resta = $a - $b;
            echo "$a - $b es $resta";
        }

        if ($_POST["Mult"]) {
            $mult = $a * $b;
            echo "$a * $b es $mult";
        }
        
        if ($_POST["Division"]) { 
            $div = $a / $b;
            echo "$a / $b es $div";
        }

        ?>
        <form action="#" method="POST">
            A:<input type="text" name="cajaA" value="<?php echo "$a" ?>">
            B:<input type="text" name="cajaB" value="<?php echo "$b" ?>">
            <br/>
            <input type="submit" name="Suma" value ="Suma">
            <input type="submit" name="Resta" value ="Resta">
            <input type="submit" name="Mult" value ="Mult">
            <input type="submit" name="Division" value ="Division">
        </form>
    <?php
} else {
    ?>
    <form action="#" method="POST">
        A:<input type="text" name="cajaA">
        B:<input type="text" name="cajaB">
        <br/>
        <input type="submit" name="Suma" value ="Suma">
        <input type="submit" name="Resta" value ="Resta">
        <input type="submit" name="Mult" value ="Mult">
        <input type="submit" name="Division" value ="Division">
    </form>
    <?php  
}
?>