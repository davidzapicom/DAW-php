<!DOCTYPE html>
<html>
<body>
<head>
<title>Ejercicio 5</title>
<meta charset='UTF-8' />
</head>
<?php
class Libro {
    public $titulo = "Titulo por defecto";
    public $autor = "Autor por defecto";
    public $aniopublicacion = "Anio por defecto";
    public $numerohojas = "Hojas por defecto";
    public $editorial = "Editorial por defecto";
}

    $libro1 = new Libro();
    $libro1->titulo = "Los pilares de la tierra";
    $libro1->autor = "Ken Follet";
    $libro1->aniopublicacion = 2001;
    $libro1->numerohojas = 1040;
    $libro1->editorial = "Plaza & Janes Editores";
?>
<h1>Titulo: <?php echo $libro1->titulo; ?></h1>
<h3>Autor: <?php echo $libro1->autor; ?></h3>
<h3>Año de publicación: <?php echo $libro1->aniopublicacion; ?></h3>
<h3>Hojas: <?php echo $libro1->numerohojas; ?></h3>
<h3>Editorial: <?php echo $libro1->editorial; ?></h3>
</body>
</html>