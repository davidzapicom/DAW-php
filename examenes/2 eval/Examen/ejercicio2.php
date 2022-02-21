<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        .error {
            color: #FF0000;
        }

        p {
            text-transform: uppercase;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $error = "";
    echo '<h3>Hola ' . $_SESSION["usuario"] . '.</h3>';
    if (isset($_POST['guardar'])) {
        $titulo = $_POST["titulo"];
        $anio = $_POST["anio"];
        $director = $_POST["director"];
        $poster = $_POST["poster"];
        $alquilada = $_POST["alquilada"];
        $sipnosis = $_POST["sipnosis"];
        $puntuacion = $_POST["puntuacion"];
        $con = mysqli_connect('localhost', 'acceso', 'acceso', 'video');
        $insert = "INSERT INTO peliculas (id,title,year,director,poster,rented,synopsis,nota) VALUES (NULL,'$titulo','$anio','$director','$poster',$alquilada,'$sipnosis',$puntuacion)";
        if (mysqli_query($con, $insert)) {
            $error = "pelicula insertado correctamente.";
        } else {
            $error = "ERROR: no se ha podido insertar la pelicula.";
        }
        mysqli_close($con);
    }
    ?>
    <h2>Matriculación</h2>
    <p><span class="error">* Campos requeridos.</span></p>
    <form action="#" method="post">
        Titulo <input type="text" name="titulo" required>
        <span class="error">*</span>
        <br><br>
        Año: <input type="text" name="anio" required>
        <span class="error">*</span>
        <br><br>
        Director: <input type="text" name="director" required>
        <span class="error">*</span>
        <br><br>
        Poster: <input type="url" name="poster" required>
        <span class="error">*</span>
        <br><br>
        Alquilada: <input type="number" name="alquilada" max="1" required>
        <span class="error">*</span>
        <br><br>
        Sipnosis: <input type="text" name="sipnosis" required>
        <span class="error">*</span>
        <br><br>

        Puntuación: <input type="number" name="puntuacion" max="10" required>
        <!-- <?php if (isset($_POST["votar"])) {
                    echo "<img src='estrella.jpg'>";
                    $voto++;
                }
                ?> 
            <br><br>
            <button type="submit">Votar</button>-->
        <span class="error">*</span>
        <br><br>
        <input type="submit" value="Enviar" name="guardar" />
    </form>
    <?php
    echo $error;
    ?>
</body>

</html>