<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        button:hover {
            border: 1px solid black;
        }

        button:active {
            border: 1px solid blue;

        }
    </style>
</head>

<body>
    <?php
    ini_set("display_errors", "1");
    $error = $aviso = "";
    if (isset($_POST['guardar'])) {
        $fecha = date('Y-m-d', strtotime($_POST['fecha']));
        $hora = date('H:i:s', strtotime($_POST['hora']));
        $pictograma = $_POST["pictograma"];
        $persona = $_POST["persona"];


        if (($fecha >  date('Y-m-d') || ($fecha == date('Y-m-d') && $hora > date('H:i:s'))) && $hora >= "08:00" && $hora <= "24:00") {
            if (mysqli_query(mysqli_connect('localhost', 'ACCESO', '', 'pictograma'), "INSERT INTO agenda (id,fecha,hora,idpersona,idimagen) VALUES (NULL,'$fecha','$hora','$persona','$pictograma')")) {
                $error = "Cita insertada correctamente.";
            } else {
                $error = "ERROR: no se ha podido insertar la cita.";
                $aviso = "Vuelve a intentarlo.";
            }
        } else if (date('H:i') >= $hora) {
            $error = "La hora tiene que ser posterior a la actual";
        }
    }
    ?>

    <form action="#" method="post">
        
        <?php
        $imagenes = mysqli_query(mysqli_connect('localhost', 'ACCESO', '', 'pictograma'), "SELECT idimagen,imagen,descripcion FROM imagenes");
        while ($registro = mysqli_fetch_row($imagenes)) {
        ?>
           <img src="<?php echo $registro[1]; ?>" alt="<?php echo $registro[2]; ?>">
           <input type="checkbox" name="pictograma" value="<?php echo $registro[0]; ?>">
        <?php
        }
        ?>
        <br>
        Persona: <select name="persona" value="<?php if (isset($_POST['guardar'])) echo $persona; ?>" required>
            <?php
            $result = mysqli_query(mysqli_connect('localhost', 'ACCESO', '', 'pictograma'), "SELECT idpersona,nombre,apellidos FROM personas");
            while ($registro = mysqli_fetch_row($result)) {
            ?>
                <option value=<?php echo $registro[0] ?>><?php echo $registro[1] . " " . $registro[2]; ?></option>
            <?php
            }
            ?>
        </select>
        <br />
        Fecha: <input type="date" name="fecha" value="<?php if (isset($_POST['guardar'])) echo $fecha; ?>" min="<?= date('Y-m-d'); ?>" max="2100-12-31" required>
        <br />
        Hora: <input type="time" id="hora" name="hora" value="<?php if (isset($_POST['guardar'])) echo $hora; ?>" min="08:00" max="24:00" required>
        <span id="avisohora">
            <br />
            <p><?php echo "<strong>$error</strong>"; ?></p>
            <p><?php echo "$aviso"; ?></p>
            <input type="submit" class="button" name="guardar" value="Guardar seleccion">
    </form>
</body>

</html>