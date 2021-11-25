<?php
    session_start();
    $_SESSION["nombre"] = $_POST["nombre"];

    $productos = array(
        array(
            "Producto" => "Television 4K",
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
            "Precio" => 5,
            "Cantidad" => 0
        )
    );
?>
    <html>
    <style>
        .contenedor{
            width: 800px;
            height: 600px;
            margin: 20px auto;
            border: 3px solid black;
        }
        .box{
            float: left;
            width: 200px;
            height: 150px;
            margin-left: 20px;
            margin-bottom: 20px; 
        }
        h1{
            text-align:center;
        }
    </style>
    </html>
    <?php
    echo "<div class='contenedor'>"; 
    echo "<h1>Bienvenid@ " .$_SESSION["nombre"]. "</h1>";


    foreach ($productos as $propiedad) { 
        echo "<div class='box'>";
        echo "Producto: ".$propiedad['Producto'];
        echo "Descripcion: ".$propiedad['Descripcion'];
        echo "Precio: ".$propiedad['Precio'];
        echo '<button type="submit" value="$propiedad["Producto"]">añadir al carrito</button>';
        echo "</div>";
    }
    echo "</div>";


    echo "<aside></aside>";





    

    
?>
    