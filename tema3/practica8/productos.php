<?php
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    echo 'Bienvenid@ ' .$_SESSION["nombre"];

    $datos = array(
        "nombres" => array("Juan Perez","Pablo Manrique","Nancy Peña"),
        "direccion" => array("Cra. 45 # 45 -56","Clle. 23 # 12 -19 Sur","Av. 34 # 16 -12"),
        "telefono" => array("3456789","3214567","2135423"),
        "fecha" => array("23/12/1997","12/10/1980"," 07/06/2000"),
        "color" => array("Amarillo","Verde","Verde"),
        "significado" => array("Riqueza yalegría.","No se encuentra el significado","")
    );
    
    $nombres = $datos['nombres'];
    $direcciones = $datos['direccion'];
    $telefonos = $datos['telefono'];
    $fechas = $datos['fecha'];
    $colores = $datos['direccion'];
    $significados = $datos['significado'];
    
    echo "<table border=1><tr><th>nombres</th>
        <th>direccion</th>
        <th>telefono</th>
        <th>fecha</th>
        <th>color</th>
        <th>significado</th></tr>";
    
    
    
    
    for ($i = 0; $i < count($nombres); $i++) {
        echo "<tr><td>".$nombres[$i]."</td></tr>";
        echo "<tr><td>".$direcciones[$i]."</td></tr>";
        echo "<tr><td>".$telefonos[$i]."</td></tr>";
        echo "<tr><td>".$fechas[$i]."</td></tr>";
        echo "<tr><td>".$colores[$i]."</td></tr>";
        echo "<tr><td>".$significados[$i]."</td></tr>";
    }
    
    echo "</table>";

    

    







    //echo "<h2>Carro:</h2>";

    //echo"<a href="confirmar.php">Confirmar compra</a>";
?>
    