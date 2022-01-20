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
    <title>Registrarse</title>
</head>
<body>
<?php
if(isset($_POST['Register'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $pass = hash_hmac('sha256', 'The quick brown fox jumped over the lazy dog.', 'secret');

    if(empty($name) || empty($password) || empty($password2)) {
        header("location:register.php");
    } else {
        $sentencia="SELECT * FROM usuarios where name='$name' AND password='$password'";
        $con = mysqli_connect('localhost','administrador','administrador','ventas');
        $result = mysqli_query($con,$sentencia);
        $fetch = mysqli_fetch_assoc($result);
        
        if (mysqli_num_rows($result) >= 1) {
            echo "Ya existe un articulo con esos atributos.";
        } else {
            $sql="INSERT INTO () VALUES ($ ,'$ ',$ ,'$ ')";
            if(mysqli_query($con, $sql)){
                echo "Usuario registrado correctamente.";
            } else{
                echo "ERROR: no se ha podido registrar el usuario.";
            }
        }
    mysqli_close($con);
    }
}
?>
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="#" method="post">
                    <h3>Registrarse</h3>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="name" required/>
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repite la contraseña" name="password2" required/>
                    </div>
                    <div class="form-group">
                        <label for="cars">Elige tu rol:</label>
                        <select>
                            <option value="consultor">Consultor</option>
                            <option value="administrador">Administrador</option>  
                        </select>
                    </div>            
                    <button name="Register" class="btn btn-outline-primary btn-lg btn-block">Registrarse</button>
                </form>
                <p>Si ya tienes una cuenta <a href="index.php">Iniciar sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>