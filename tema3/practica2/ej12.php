<?php
$meses = array ("Enero" => 9,
"Febrero" => 12,
"Marzo" => 0,
"Abril" => 17
);

foreach($meses as $mes => $num_peliculas){
    if (!$num_peliculas == 0){
        print "En $mes se han visto $num_peliculas peliculas.<br>";
    }
}
?>