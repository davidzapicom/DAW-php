<?php
echo "<h2>PHP Form Validation Example</h2>";
if(isset($_POST["boton"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $web = $_POST["website"];
    $com = $_POST["radio"];
    $gender = $_POST["radio"];

    if (empty($name)) {
        $nameErr = "Nombre requerido";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    

    if (empty($email)) {
        $emailErr = "Se requiere Email";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Fomato de Email invalido";
        }
    }
    

    echo "<h2>Your Input</h2>";
    echo $email;
    echo "<br>";
    echo $emailErr;
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
?>