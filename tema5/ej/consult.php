<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consultar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
echo '<h3>Hola ' .$_SESSION["name"]. ' ' .$_SESSION["rol"]. '.</h3>';
echo '<a href="cart.php">Productos</a><br/>';
echo '<a href="logout.php">Cerrar sesión</a>';
$link = new PDO('mysql:host=localhost;dbname=ventas', 'consultor', 'consultor');
?>
<table class="table table-striped">
		<thead>
		<tr>
			<th>DESCRIPCION</th>
			<th>PRECIO</th>
			<th>CARACTERISTICAS</th>
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from articulos') as $row){ ?> 
<tr>
    <td><?php echo $row['descripcion'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['caracteristicas'] ?></td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>