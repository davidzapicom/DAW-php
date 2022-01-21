<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>LogIn</title>
</head>
<body>
<?php 
$error = "";
    if(isset($_POST['Login'])) {
        $name = $_POST['Name'];
        $password = $_POST['Password'];
        if(empty($_POST['Name']) || empty($_POST['Password'])) {
            header("location:index.php");
        } else {
            $pass = hash_hmac('sha512', '$password', 'secret');
            $con = mysqli_connect('localhost','administrador','administrador','ventas');
            $sentencia = "SELECT * FROM usuarios where usuario='$name' and password='$pass'";
            $result = mysqli_query($con,$sentencia);
            $fetch = mysqli_fetch_assoc($result);
            $rol = $fetch['rol'];
            //var_dump($result);
            mysqli_close($con);
            if (mysqli_num_rows($result) == 0) {
                $error = "Este usario no existe";
            } else {
                echo '<h3>Hola ' . $name. ' ' .$rol. '.</h3>';
                echo '<a href="logout.php">Cerrar sesión</a>';
                if($rol == 'consultor') {
                    header("location:consult.php");
                } else if ($rol == 'administrador') {
                    header("location:insert.php");
                }
            }
        }
    }     
?>
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="#" method="post">
                    <h3>Login</h3>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="Name" required/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="Password" required/>
                        <p><?php echo $error; ?></p>
                    </div>

                    <button name="Login" class="btn btn-outline-primary btn-lg btn-block">Iniciar sesion</button>
                </form>
                <p>Si aún no tienes una cuenta <a href="register.php">Registrarse</a></p>
            </div>
        </div>
    </div>
</body>
</html>