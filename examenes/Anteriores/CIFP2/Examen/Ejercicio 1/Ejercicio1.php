<?php
    if( isset($_POST['calcular'])){
        $contador = 0;
        for($x = 0; $x < 3; $x++){
            for($y = 0; $y < 2; $y++){
                $numero = $_POST[$contador];
               echo($_POST[$contador] . "='" . decbin($numero) . "'");
               echo("<br>"); 
               $contador ++;
            }
        }
    }
    else{
        ?>
        <html>
            <head>
            </head>
            <body>
                <form method="post" action="">
                    <?php
                        $contador = 0;
                        for($x = 0; $x < 3; $x++){
                            for($y = 0; $y < 2; $y++){
                                echo("E.$x.$y<input type='text' id='$contador' name='$contador'/>");
                                $contador++;
                            }
                            echo("<br>");
                        }
                    ?>
                    <input type="submit" id="calcular" name="calcular" value="Calcular"/>
                </form>

            </body>
        </html>
        <?php
    }
?>