<?php
    session_start();
    $_SESSION["nombre"] = $_POST["nombre"];

    $productos = array(
        array(
            "Titulo" => "Television 4K",
            "Descripcion" => "22 pulgadas",
            "Precio" => 210
        ),
        array(
            "Producto" => "Movil",
            "Descripcion" => "4G",
            "Precio" => 300
        ),
        array(
            "Producto" => "Mp4",
            "Descripcion" => "20gb",
            "Precio" => 13
        ),
        array(
            "Producto" => "Raton",
            "Descripcion" => "6000 dpi",
            "Precio" => 20
        ),
        array(
            "Producto" => "Alfombrilla",
            "Descripcion" => "Negra",
            "Precio" => 30
        ),
        array(
            "Producto" => "Usb",
            "Descripcion" => "5gb",
            "Precio" => 5
        )
    );
    
    echo "<body style ='border: 3px solid black'>"; 
    echo "Bienvenid@ " .$_SESSION["nombre"];
    echo "<br/><br/>";
    echo "<table>";
    foreach ($productos as $propiedad) { 
        echo "<tr>"; 
        foreach($propiedad as $valores => $valor){
            echo "<td> $valores: <strong>$valor</strong></td>";
        }
        echo "</tr>"; 
    } 
    echo "</table>";
        




    //echo "<h2>Carro:</h2>";

    //echo"<a href="confirmar.php">Confirmar compra</a>";
?>
    