<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php 
    session_start(); 
    if(isset($_POST["Insertar"])){
    $_SESSION["estrella"]=0;
    }
    ?>
    <br /><br />
    <h3>REGISTRO NUEVA PELICULA</h3>
    <form method="POST" action="#">
        <label>Titulo</label>
        <input type="text" name="titulo" ><br />
        <label>Año</label>
        <input type="text" name="ano" ><br />
        <label>Director</label>
        <input type="text" name="director" ><br /> 
        <label>Poster</label>
        <input type="text" name="poster" ><br />    
        <label>Alquilada</label>
        <input type="number" max="1" min="0" name="alquilada"><br />
        <label>Sinopsis</label>
        <input type="text" name="synopsis"><br />
        <label>Puntuacion</label><br/>
        <?php
        if($_SESSION["estrella"]>0){
            if($_SESSION["estrella"]>10){
                $_SESSION["estrella"]=10;
            }   
            for ($x=0; $x < $_SESSION["estrella"];  $x++) { 
                ?>
                <img src="estrella.jpg" width="20" height="20   ">
                <?php
            }
        }
        ?><br/>
        <input type="submit" name="estrella" value="Votar"><br/><br/>
        <input type="submit" name="insertar" value="Insertar">
    </form>
    <form method="POST" action="ejercicio1.php">
        <input type="submit" name="cerrar" value="Cerrar sesion">
         </form>
    <?php
    if(isset($_POST["estrella"]) && $_SESSION["estrella"]<10){
        $_SESSION["estrella"]++;
    }
    if (isset($_POST["insertar"])) {
        var_dump($_POST["alquilada"]);
        if(empty($_POST["titulo"]) || empty($_POST["ano"]) || empty($_POST["director"]) || empty($_POST["poster"]) || empty($_POST["synopsis"])){
            echo "<br/>Todos los campos son obligatorios";
        }
        elseif($_POST["alquilada"]!="0" && $_POST["alquilada"]!="1"){
            echo "<br/>El valor de alquilada debe ser 0 o 1";
        }else{
        $conectar = mysqli_connect('localhost', 'acceso', 'acceso', 'video');
        $insert = "INSERT INTO peliculas (title,year,director,poster,rented,synopsis,nota) VALUES ('$_POST[titulo]', '$_POST[ano]', '$_POST[director]', '$_POST[poster]', '$_POST[alquilada]','$_POST[synopsis]', $_SESSION[estrella])";
        $select = mysqli_query($conectar, $insert);
        echo "<h3>Pelicula insertado correctamente</h3>";
        }
    }
    ?>
</body>

</html>