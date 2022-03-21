<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
<?php
    ini_set("display_errors", true);
    if (isset($_POST['mostrar'])) {
        $fecha = date('Y-m-d', strtotime($_POST['fecha']));
        $persona = $_POST["persona"];
        $result = mysqli_query(mysqli_connect('localhost', 'ACCESO', '', 'pictograma'), "SELECT personas.nombre,agenda.hora,imagenes.imagen FROM personas,agenda,imagenes WHERE agenda.idpersona='$persona' AND agenda.fecha='$fecha' AND agenda.idpersona=personas.idpersona AND agenda.idimagen=imagenes.idimagen");
        $filas = mysqli_num_rows($result);

        if ($filas != 0) {
            while ($registro = mysqli_fetch_row($result)) {
            }
    ?>
            <table>
                <thead>Agenda de <?php echo $registro[0]; ?> Fecha: <?php $fecha; ?></thead>
                <tbody>
                    <tr>
                        <td><?php echo $fecha; ?></td>
                        <td><?php echo $registro[1]; ?></td>
                        <td><img src="<?php echo $registro[2]; ?>" alt=""></td>
                    </tr>
            <?php
        }
    } else {
        echo "<tr><td>No hay nada para mostrar.</td></tr>";
    }
            ?>
                </tbody>
            </table>
    <form action="#" method="post">
        Persona: <select name="persona" value="<?php if (isset($_POST['mostrar'])) echo $persona; ?>" required>
            <?php
            $result = mysqli_query(mysqli_connect('localhost', 'ACCESO', '', 'pictograma'), "SELECT nombre,apellidos,idpersona FROM personas");
            while ($registro = mysqli_fetch_row($result)) {
            ?>
                <option value=<?php echo $registro[2] ?>><?php echo $registro[0] . " " . $registro[1]; ?></option>
            <?php
            }
            ?>
        </select>
        <br />
        Fecha: <input type="date" name="fecha" value="<?php if (isset($_POST['mostrar'])) echo $fecha; ?>" required>
        <br />
        <input type="submit" class="button" name="mostrar" value="Mostrar listado">
    </form>

   
</body>

</html>