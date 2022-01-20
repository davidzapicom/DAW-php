<?php 
session_start();
$name = $_SESSION['Name'] = $_POST['Name'];
$pass = $_SESSION['Password'] = $_POST['Password'];

    //INICIAR USUARIO
    if(isset($_POST['Login'])) {
        if(empty($_POST['Name']) || empty($_POST['Password'])) {
            header("location:index.php");
        } else {
            $sentencia="SELECT * FROM usuarios where usuario='$name' and password='$pass'";
            $con=mysqli_connect('localhost','root','','ventas');
            $result=mysqli_query($con,$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            mysqli_close($con);
            $rol = $_SESSION['rol'] = $fetch['rol'];
            if (mysqli_num_rows($result) == 0) {
                echo "Este usario no existe";
                echo "<a href='index.php'>Volver al inicio</a>";
            } else {
                if ($rol == 'consultor') {
                    $con=mysqli_connect('localhost','consultor','consultor','ventas');
                } else {
                    $con=mysqli_connect('localhost','administrador','administrador','ventas');
                }
            header("location:wellcome.php");
            }
        }
    }
?>