<?php
/*Esta función devuelve una cadena con los espacios en blanco eliminados del inicio y final del str. sin el segundo parámetro, trim() eliminará estos caracteres:

" " (ASCII 32 (0x20)), espacio simple.
"\t" (ASCII 9 (0x09)), tabulación.
"\n" (ASCII 10 (0x0A)), salto de línea.
"\r" (ASCII 13 (0x0D)), retorno de carro.
"\0" (ASCII 0 (0x00)), el byte NUL.
"\x0B" (ASCII 11 (0x0B)), tabulación vertical.*/
$data = trim($data);
?>