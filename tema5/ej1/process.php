<?php 
session_start();
$name = $_SESSION['Name'] = $_POST['Name'];
$pass = $_SESSION['Password'] = $_POST['Password'];
$id_articulo = $_SESSION['id_articulo'] = $_POST['id_articulo'];
$descripcion = $_SESSION['descripcion'] = $_POST['descripcion'];
$precio = $_SESSION['precio'] = $_POST['precio'];
$caracteristicas = $_SESSION['caracteristicas'] = $_POST['caracteristicas'];

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



    //REGISTRAR NUEVO USUARIO
    if(isset($_POST['Register'])) {
        if(empty($_POST['Name']) || empty($_POST['Password'])) {
            header("location:register.php");
        } else {
            $sentencia="SELECT * FROM usuarios where usuario='$name' and password='$pass'";
            $con=mysqli_connect('localhost','root','','ventas');
            $result=mysqli_query($con,$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            mysqli_close($con);
            $rol = $_SESSION['rol'] = $fetch['rol'];
            if (mysqli_num_rows($result) == 0) {
                $link = new PDO('mysql:host=localhost;dbname=ventas', 'administrador', 'administrador');
                $link->query("INSERT INTO usuarios (usuario, password, rol) VALUES ('$name', '$pass', '$rol')"); 
            } else {
                echo 'Usuario ya registrado. Por favor, inicie sesión';
                header("location:index.php");
            }
        }
    }

    //INSERTAR ARTICULO
    if(isset($_POST['Insert'])) {
        //validar rol
        if(empty($_POST['id_articulo']) || empty($_POST['descripcion']) || empty($_POST['precio']) || empty($_POST['caracteristicas'])) {
            header("location:insert.php");
        } else {
            $sentencia="SELECT * FROM articulos where id_articulo='$id_articulo'";
            $con=mysqli_connect('localhost','root','','ventas');
            $result=mysqli_query($con,$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            mysqli_close($con);
            if (mysqli_num_rows($result) == 0) {
                $sentencia="INSERT INTO articulos (id_articulo, descripcion, precio, caracteristicas) VALUES ($id_articulo, $descripcion, $precio, $caracteristicas)";
                $con=mysqli_connect('localhost','root','','ventas');
                $result=mysqli_query($con,$sentencia);
                $fetch = mysqli_fetch_assoc($result);
                mysqli_close($con);
            } else {
                echo 'Ya existe un articulo con ese ID';
            }
        }
    }
    
?>