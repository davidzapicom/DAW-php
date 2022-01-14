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
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="process.php" method="post">
                    <h3>Insertar articulo</h3>

                    <div class="form-group">
                        <label>Id articulo</label>
                        <input type="text" class="form-control" placeholder="Id articulo" name="id_articulo" required/>
                    </div>
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
                        <input type="text" class="form-control" placeholder="Características" name="caracteristicas" required/>
                    </div>

                    <button name="Insert" class="btn btn-outline-primary btn-lg btn-block">Insertar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>