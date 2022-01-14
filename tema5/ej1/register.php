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
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="process.php" method="post">
                    <h3>Registrarse</h3>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="Name" required/>
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="Password" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repite la contraseña" name="Password" required/>
                    </div>

                    <button name="Register" class="btn btn-outline-primary btn-lg btn-block">Registrarse</button>
                </form>
                <p>Si ya tienes una cuenta <a href="index.php">Iniciar sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>