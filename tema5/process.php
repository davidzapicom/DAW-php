<?php 
session_start();
$name = $_POST['Name'];
$pass = $_POST['Password'];
    if(isset($_POST['Login'])) {
        if(empty($_POST['Name']) || empty($_POST['Password'])) {
            header("location:index.php");
        } else {
            $sentencia="SELECT * FROM usuarios where usuario='".$_POST['Name']."' and password='".$_POST['Password']."'";
            $con=mysqli_connect('localhost','root','','ventas');
            $result=mysqli_query($con,$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            mysqli_close($con);
            if (mysqli_num_rows($result) == 0) {
                echo "Este usario no existe";
            } else {
                if ($fetch['rol'] == 'consultor') {
                    $con=mysqli_connect('localhost','consultor','consultor','ventas');ç
                    
                } else {
                    $con=mysqli_connect('localhost','administrador','administrador','ventas');
                }
            echo 'Hola ' .$name. ', eres ' .$fetch['rol']. ".";
        }
    }
}
?>