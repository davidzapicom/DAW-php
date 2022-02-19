<!DOCTYPE HTML>
<html>
<head>
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
    $dni = $_SESSION["dni"];
    $usu = $_SESSION["usuario"];
    $tipo = $_SESSION['tipo'] = $_POST['tipo'];
    $inscripcion = date('Y-m-d');
    $codcurso = $_SESSION["codcurso"] = $_POST["codcurso"];
    $pruebaA = $_SESSION["pruebaA"] = $_POST["pruebaA"];
    $pruebaB = $_SESSION["pruebaB"] = $_POST["pruebaB"];
    echo '<p>Alumno: ' . $dni . ' <br/> Nombre: ' . $usu . '</p>';
    
    /*------------------------------------------------------------------------------*/
    if (isset($_POST["guardar"])) {
        $con = mysqli_connect('localhost', 'root', '', 'oposicion');
        $select = "SELECT * FROM curso WHERE codigocurso= '$codcurso'";
        $resultado = mysqli_query($con, $select);
        if (mysqli_num_rows($resultado) != 0) {
            $introducir = "INSERT INTO matricula (dnialumno, codcurso, pruebaA, pruebaB, tipo, inscripcion) VALUES ('$dni', '$codcurso', '$pruebaA', '$pruebaB', '$tipo', '$inscripcion')";
            $introducirMatricula = mysqli_query($con, $introducir);
            echo 'Matricula del alumno ' .$dni. ' en el curso ' .$codcurso. ' introducida correctamente!';
            $_SESSION['codcurso'] = " ";
            $_SESSION['tipo'] = " ";
            $_SESSION['pruebaA'] = " ";
            $_SESSION['pruebaB'] = " ";
        } else {
            echo 'No se ha podido introducir la matricula del alumno ' .$dni. ' en el curso ' .$codcurso. ', código de curso incorrecto.';
            $_SESSION['codcurso'] = " ";
        }
    }
    ?>
        <h2>Matriculación</h2>
        <p><span class="error">* Campos requeridos.</span></p>
        <form action="#" method="post">
            DNI: <input type="text" name="dni" value="<?php echo $dni; ?>" required>
            <span class="error">*</span>
            <br><br>
            COD CURSO: <input type="text" name="codcurso" value="<?php echo $_SESSION['codcurso']; ?>" required>
            <span class="error">*</span>
            <br><br>
            PRUEBA A: <input type="number" name="pruebaA" value="<?php echo $_SESSION['pruebaA']; ?>" required>
            <span class="error">*</span>
            <br><br>
            PRUEBA B: <input type="number" name="pruebaB" value="<?php echo $_SESSION['pruebaB']; ?>" required>
            <span class="error">*</span>
            <br><br>
            TIPO:
            <input type="radio" name="tipo" value="Oficial" <?php if (isset($tipo) && $tipo=="Oficial") echo "checked";?> required>Oficial
            <input type="radio" name="tipo" value="Libre" <?php if (isset($tipo) && $tipo=="Libre") echo "checked";?> required>Libre
            <span class="error">*</span>
            <br><br>
            INSCRIPCION: <input type="date" name="inscripcion" value="<?php echo $inscripcion; ?>" max="<?php echo $inscripcion; ?>" required>
            <span class="error">*</span>
            <br><br>
            <input type="submit" value="Guardar" name="guardar" />
        </form>
</body>
</html>