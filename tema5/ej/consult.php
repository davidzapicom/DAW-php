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
$link = new PDO('mysql:host=localhost;dbname=ventas', 'root', '');
?>
<table class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>DESCRIPCION</th>
			<th>PRECIO</th>
			<th>CARACTERISTICAS</th>
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from articulos') as $row){ ?> 
<tr>
	<td><?php echo $row['id_articulo'] ?></td>
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