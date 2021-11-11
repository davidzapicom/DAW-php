<?php
echo "<h2>PHP Form Validation Example</h2>";

$email="abc@abc.com";
$emailErr="Email correcto";

if(isset($_POST["boton"])){
    if (empty($email)|) {
        $emailErr = "Se requiere Email";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Fomato de Email invalido";
        }
    }


    $num = $_POST["n1"];
    $power = $_POST["n2"];

    echo " $num elevado a $power es: ";
    echo pow($num, $power);
} else {
    ?>
    <form action="#" method="POST">
        Name: <input type="text" name="name">
        <br/><br/>
        Email: <input type="email" name="email">
        <br/><br/>
        Website: <input type="text" name="website">
        <br/><br/>
        Comment: <textarea name="comments" id="comments" rows="6" cols="35"></textarea>
        <br/><br/>
        Gender: <input type="radio" name="sexo" value="mujer"> Female
        <input type="radio" name="sexo" value="hombre"> Male
        <br/><br/>
        <input type="submit" name="boton" value="Submit">
    </form>
    <?php  
}

echo "<h2>Your Input</h2>";
echo $email;
echo "<br>";
echo $emailErr;
?>