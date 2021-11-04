<?php
function Demo1(){// Genera una matriz con posición, encuentra el valor máximo y la posición
	$array = [34,56,78,89,
              76,54,32,41,
              90,93,88,76,
              70,40,97,32];
	$one = [1,2,3,4];
	for ($j = 1; $j < 5; $j++) {   // Clave de síntesis
		for($i = 0; $i < count($one); $i++){
				$a[] =  $j.'-'.$one[$i];// La nueva matriz creada (clave)
			}
	}
	$new_array = array_combine($a, $array);// Matriz con posición
	$max = max($array);// Para valores grandes
	$max_new_array = strval(array_search($max, $new_array));// La posición del máximo
	echo "Para valores grandes: $max y la ubicación correspondiente: $max_new_array";
}

echo Demo1().'<br>';// Para gran valor y posición
?>