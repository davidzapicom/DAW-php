<?php
$ran = array(1,2,3,4); 
$randomElement = $ran[array_rand($ran, 1)];

echo $randomElement;


//Metodo para buscar el valor maximo de toda la matriz y coger su posicion en la fila y en la columna.
/*public static void maxMatriz(int [][] matriz) {
    int max = 0, filamax = 0, colmax = 0, col, fila;
    
    for (col = 0; col < 5; col++) {
        for (fila = 0; fila < 5; fila++) {
            if (matriz[fila][col] > max) {
                max = matriz[fila][col];
                filamax = fila;
                colmax = col;
            }
        }
    }
    System.out.println("El valor maximo de la matriz es: " +max+ " y su posicion es, en la fila: " +filamax+ " y en la columna: " +colmax);
}*/

?>