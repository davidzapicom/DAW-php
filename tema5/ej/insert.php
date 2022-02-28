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
    <title>Insertar</title>
</head>
<body>
<?php
session_start();
$error = "";
echo '<h3>Hola ' .$_SESSION["name"]. ' ' .$_SESSION["rol"]. '.</h3>';
echo '<a href="consult.php">Ir a consultar</a> <br/>';
echo '<a href="logout.php">Cerrar sesión</a>';
if(isset($_POST['Insert'])) {
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $caracteristicas = $_POST['caracteristicas'];
    if(empty($descripcion) || empty($precio) || empty($caracteristicas)) {
        header("location:index.php");
    } else {
        $sentencia = "SELECT * FROM articulos where descripcion='$descripcion'";
        $con = mysqli_connect('localhost','administrador','','ventas');
        $result = mysqli_query($con,$sentencia);
        $fetch = mysqli_fetch_assoc($result);
        
        if (mysqli_num_rows($result) >= 1) {
            $error = "Ya existe un articulo con esos atributos.";
        } else {
            $sql = "INSERT INTO articulos (idarticulo, descripcion, precio, caracteristicas) VALUES (NULL,'$descripcion',$precio,'$caracteristicas')";
            if(mysqli_query($con, $sql)){
                $error = "Articulo insertado correctamente.";
            } else{
                $error = "ERROR: no se ha podido insertar el articulo.";
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
                    <h3>Insertar articulo</h3>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required/>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" class="form-control" placeholder="Precio" name="precio" required/>
                    </div>
                    <div class="form-group">
                        <label>Características</label>
                        <input type="text" class="form-control" placeholder="Caracteristicas" name="caracteristicas" required/>
                        <p><?php echo $error; ?></p>
                    </div>
                    <button name="Insert" class="btn btn-outline-primary btn-lg btn-block">Insertar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>