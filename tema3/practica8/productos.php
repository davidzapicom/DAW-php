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
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            color: #142F43;
        }
        .contenedor{
            width: 69%;
            height: 600px;
            border: 2px solid #142F43;
            float: left;
        }
        .box{
            float: left;
            width: 200px;
            height: 150px;
            margin-left: 20px;
            margin-bottom: 20px; 
        }
        h1{
            text-align: left;
            padding-left: 10px;
        }
        aside{
            width: 29%;
            float: right;
            height: 584px;
            background-color: #142F43;
            margin: 0 auto;
            padding: 10px;
        }
        aside h1{
            color: white;
            text-align: center;
            text-transform: uppercase;
        }
        aside button{
            color: #142F43;
            background-color: white;
        }
        aside button.esp{
            position: absolute;
            bottom: 250;
            right: 20;
        }
        button{
            padding: 5px;
            border-radius: 20px;
            background-color: #142F43;
            color: white;
        }
        button a{
            text-decoration: none;
            color: #142F43;
        }
    </style>
    </html>
    <?php
    echo "<body>";
    echo "<div class='contenedor'>"; 
    echo "<h1>Bienvenid@ " .$_SESSION["nombre"]. "!</h1>";


    foreach ($productos as $propiedad) { 
        echo "<div class='box'>";
        echo "<p>Producto: <strong>".$propiedad['Producto']. "</strong></p>";
        echo "<p>Descripcion: <strong>".$propiedad['Descripcion']. "</strong></p>";
        echo "<p>Precio: <strong>".$propiedad['Precio']. "€</strong></p>";
        echo '<button type="submit" value="$propiedad["Producto"]">Añadir</button>';
        echo "</div>";
    } 
    echo "</div>";
    echo "<aside>";
    echo "<h1>carro</h1>";
    foreach ($productos as $propiedad) { 
        echo '<button type="submit" value="$propiedad["Producto"]">Quitar</button>';
    }
    echo '<button class="esp" type="submit"><a href="confirmar.php">Continuar</a></button>';
    echo "</aside>";
    
    echo "</body>";
    
    
    
    

    
?>
    