    <html>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
    <style>
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
            color: #142F43;
            font-family: 'Outfit', sans-serif;
        }
        p{
            color: #142F43;
            font-family: 'Outfit', sans-serif;
        }
        aside{
            width: 29%;
            float: right;
            height: 604px;
            background-color: #142F43;
        }
        aside h1{
            color: white;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Outfit', sans-serif;
        }
        aside button{
            color: #142F43;
            background-color: white;
        }
        button{
            padding: 5px;
            border-radius: 20px;
            background-color: #142F43;
            color: white;
            font-family: 'Outfit', sans-serif;
        }
    </style>
    </html>

    <?php

    echo"<h1>Felicidades</h1>";
    echo"<h2>Usted acaba de adquirir</h2>";




    echo"<h2>Gracias por su compra</h2>";
    echo"<a href="login.php">Si</a>";
    session_destroy();
?>