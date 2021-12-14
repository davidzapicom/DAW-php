<?php

$matriz=$_POST['matriz'];


echo '<h2>Principal:</h2>';

for($i = 0 ; $i < 4 ; $i++){
	
    echo $matriz[$i][$i] . ' - ';
	
}

echo '<h2>Secundaria:</h2>';

for($i = 0 ; $i < 4 ; $i++){
	
    for($j = 0 ; $j < 4 ; $j++){
		
        if($i + $j == 3){
			
            echo $matriz[$i][$j] . ' - ';
			
        }
    }
}

?>
