<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
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
    echo '<p>Alumno: ' . $dni . ' <br/> Nombre: ' . $usu . '</p>';

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Nombre requerido";
        } else {
            $name = limpiar_datos($_POST["name"]);
            // comprobar si el nombre contiene solo letras y espacios en blanco.
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Solo se aceptan letras y espacios en blanco.";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email requerido";
        } else {
            $email = limpiar_datos($_POST["email"]);
            // comprobar si la direccion email es correcta.
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Dirección de correo invalida.";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = limpiar_datos($_POST["website"]);
            // comprobar si la direccion URL es valida.
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "URL no válida.";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = limpiar_datos($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = limpiar_datos($_POST["gender"]);
        }
    }

    function limpiar_datos($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }




    if (isset($_POST["guardar"])) {
        $enlace = mysqli_connect('localhost', 'root', '', 'oposicion');
        $select = "SELECT * FROM alumno WHERE dniA= '$dni'";
        $resultado = mysqli_query($enlace, $select);
        if (mysqli_num_rows($resultado) != 0) {





        } else {
            echo 'La matricula del alumno ' .$dni. ' en el curso 0001 se ha realizado correctamente';
        }
    } else {
    ?>
        <h2>Matriculación</h2>
        <p><span class="error">* Campos requeridos.</span></p>
        <form action="#" method="post">
            DNI: <input type="text" name="dni" value="<?php echo $dni; ?>" require>
            <span class="error">* <?php echo $dniErr; ?></span>
            <br><br>
            COD CURSO: <input type="text" name="codcurso" value="<?php echo $codcurso; ?>" require>
            <span class="error">* <?php echo $codcursoErr; ?></span>
            <br><br>
            PRUEBA A: <input type="text" name="pruebaA" value="<?php echo $pruebaA; ?>" require>
            <span class="error">* <?php echo $pruebaAErr; ?></span>
            <br><br>
            PRUEBA B: <input type="text" name="pruebaB" value="<?php echo $pruebaB; ?>" require>
            <span class="error">* <?php echo $pruebaBErr; ?></span>
            <br><br>
            TIPO: <input type="text" name="tipo" value="<?php echo $tipo; ?>" require>
            <span class="error">* <?php echo $tipoErr; ?></span>
            <br><br>
            INSCRIPCION: <input type="text" name="inscripcion" value="<?php echo $inscripcion; ?>" require>
            <span class="error">* <?php echo $inscripcionErr; ?></span>
            <br><br>
            <input type="submit" value="Guardar" name="guardar" />
        </form>
    <?php
    }
    ?>
</body>

</html>