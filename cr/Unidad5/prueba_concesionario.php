<!DOCTYPE html>
<html>
<body>

<head>

<title>Prueba concesionario</title>

<meta charset='UTF-8' />

</head>

<?php

$host='localhost'; //Servidor donde esta la base de datos

$usuario_bd='root'; //El usuario con el que accederemos


$password_bd='';    //La password del usuario

$nombre_bd='concesionario'; //Nombre de la base de datos

//Creamos una conexión a la BD y guardamos un enlace a la misma
$enlace = mysqli_connect ( $host, $usuario_bd, $password_bd, $nombre_bd ); 

if (mysqli_connect_errno()) {

printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();

}else {

    echo "Ahora estas conectado";

}


$sql = "INSERT INTO coches (CODCOCHE, CODMARCA, MODELO, NOMBRECO) VALUES ('2100', '6666', 'Coro20', 'Corona')";

$select = "SELECT * FROM coches WHERE MODELO = 'Focus'";

echo "<br/><br/>";

/*if (mysqli_query($enlace, $sql)) { //Esto para insertar en la base de datos

    echo "El INSERT fue perfecto";

   } else {

   echo "Error: " . $sql . "<br>" . mysqli_error($enlace);

   }*/

$resultado = mysqli_query($enlace, $select);

if (mysqli_num_rows($resultado) > 0) { //Esto un select
    
    while($fila = mysqli_fetch_assoc($resultado)) {

        echo " " . $fila["CODCOCHE"] . " " . $fila["CODMARCA"] . " " . $fila["MODELO"] . " " . $fila["NOMBRECO"] . "<br>";

    }

    } else {

        echo "0 resultados obtenidos";

    }
   
   mysqli_close($enlace);

?>


</body>
</html>