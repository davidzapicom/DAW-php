<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
session_start();
if (isset($_POST["enviar"])){
    $id = $_POST["id"];
    $nomb = $_POST["nomb"];
    $apell = $_POST["apell"];
    //--------------------------------------------------------------------------------------------
        $_SESSION["enlace"] = mysqli_connect ('localhost', 'root', '', 'cif');
        $enlace = $_SESSION["enlace"];
    //--------------------------------------------------------------------------------------------
    $sqla = "INSERT INTO alumnos (id, nombre, apellidos) VALUES ('$id', '$nomb', '$apell')";
    $sqlu = "INSERT INTO usuarios (id, usuario, password, rol) VALUES ('$id', '$nomb', '$nomb', 'alumno')";
    if (mysqli_query($enlace, $sqla)) { 
        echo "El alumno creado en la tabla alumno <br><br>";
    }else{
        echo "Algo ha fallado <br><br>";
    }
    if (mysqli_query($enlace, $sqlu)) { 
        echo "El alumno creado en la tabla usuarios <br><br>";
    }else{
        echo "Algo ha fallado <br><br>";
    }
    echo '<br><a href="ejercicio2.php">Volver</a><br><br>';
}else{
    ?>
<div>
<form action="" method="post">
	<h1>Insertar alumno</h1>
    <?php
    echo "Bienvenido " . $_SESSION["rol"] . " nombre de usuario " . $_SESSION["usuario"] . " <br><br>";
    ?>
    Id usuario <input name="id" type="text" required/></br></br>
    Nombre <input name="nomb" type="text" required/></br></br>
    Apellidos <input name="apell" type="text" required/></br></br> 
    <input type="submit" value="Enviar" name="enviar"/>&nbsp
    </form>
    </div>
<?php
}
?>
</body>
</html>