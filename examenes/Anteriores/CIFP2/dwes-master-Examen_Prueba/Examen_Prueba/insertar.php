<?php
    session_start();
    if(isset($_SESSION["rol"])){
        if(isset($_POST["nombre"])){
            $login = $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $localidad = $_POST["localidad"];
            $contra = $_POST["contra1"];
            if($_POST["contra1"] == $_POST["contra2"]){
            $conexion = mysqli_connect("localhost", $_SESSION["rol"][0], $_SESSION["rol"][0], "cifp");
            $existe = mysqli_fetch_array(mysqli_query($conexion, "SELECT login, password FROM usarios WHERE login = '$nombre' AND password = '$contra'"));
            mysqli_close($conexion);
            if(isset($existe[0])){
                ?>
                    <html>
                        <head>
                        </head>
                        <body>
                            <div>
                                Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
                            </div>
                            <a href="cerrar.php">Cerrar Sesión</a>
                            <a href="login.php">Volver</a>
                            <h1 style="color: red;">Dicho Alumno ya existe</h1>
                            <form action="insertar.php" method="post">
                                Nombre<input type="text" name="nombre" required maxlength="12"/><br>
                                Apellidos<input type="text" name="apellidos" required/><br>
                                Localidad<input type="text" name="localidad" required/><br>
                                Contraseña<input type="password" name="contra1" required maxlength="12"/><br>
                                Repetir contraseña<input type="password" name="contra2" required maxlength="12"/><br>
                                <input type="submit" name="boton_alta" value="Dar alta alumno"/><br>
                            <form>
                        </body>
                    </html>

                <?php
            }
            else{
                $conexion = mysqli_connect("localhost", $_SESSION["rol"][0], $_SESSION["rol"][0], "cifp");
                mysqli_query($conexion, "INSERT INTO usarios VALUES (NULL, '$nombre', '$apellidos', '$nombre', '$contra', 'alumno', '$localidad')");
                ?>
                <html>

                    <head>
                    </head>

                    <body>
                        <div>
                            Buenos días <?php echo ($_SESSION['nombre']) ?>, se ha validado como <?php echo ($_SESSION['rol'][0]) ?>
                        </div>
                        <h1>Alumno Introducido correctamente</h1>
                        <a href="cerrar.php">Cerrar Sesión</a>
                        <a href="insertar.php">Insertar Alumno</a>
                        <a href="mostrardirector.php">Mostrar Notas</a>
                    </body>

                </html>
                <?php
            }
        }
        else{
            ?>
                <html>
                        <head>
                        </head>
                        <body>
                            <div>
                                Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
                            </div>
                            <h1 style="color: red;">Las contraseñas no coinciden</h1>
                            <a href="cerrar.php">Cerrar Sesión</a>
                            <a href="login.php">Volver</a>
                            <form action="insertar.php" method="post">
                                Nombre<input type="text" name="nombre" required maxlength="12"/><br>
                                Apellidos<input type="text" name="apellidos" required/><br>
                                Localidad<input type="text" name="localidad" required/><br>
                                Contraseña<input type="password" name="contra1" required maxlength="12"/><br>
                                Repetir contraseña<input type="password" name="contra2" required maxlength="12"/><br>
                                <input type="submit" name="boton_alta" value="Dar alta alumno"/><br>
                            <form>
                        </body>
                    </html>

            <?php
        }
        }
        else{
    ?>

                    <html>
                        <head>
                        </head>
                        <body>
                            <div>
                                Buenos días <?php echo($_SESSION['nombre'])?>, se ha validado como <?php echo($_SESSION['rol'][0]) ?>
                            </div>
                            <a href="cerrar.php">Cerrar Sesión</a>
                            <a href="login.php">Volver</a>
                            <form action="insertar.php" method="post">
                                Nombre<input type="text" name="nombre" required maxlength="12"/><br>
                                Apellidos<input type="text" name="apellidos" required/><br>
                                Localidad<input type="text" name="localidad" required/><br>
                                Contraseña<input type="password" name="contra1" required maxlength="12"/><br>
                                Repetir contraseña<input type="password" name="contra2" required maxlength="12"/><br>
                                <input type="submit" name="boton_alta" value="Dar alta alumno"/><br>
                            <form>
                        </body>
                    </html>
                    <?php
                    }
                }
                else{
                    header("location:index.php");
                }
                    ?>
