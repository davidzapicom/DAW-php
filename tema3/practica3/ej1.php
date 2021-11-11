<?php
/*Esta función devuelve una cadena con los espacios en blanco eliminados del inicio y final del str. sin el segundo parámetro, trim() eliminará estos caracteres:

" " (ASCII 32 (0x20)), espacio simple.
"\t" (ASCII 9 (0x09)), tabulación.
"\n" (ASCII 10 (0x0A)), salto de línea.
"\r" (ASCII 13 (0x0D)), retorno de carro.
"\0" (ASCII 0 (0x00)), el byte NUL.
"\x0B" (ASCII 11 (0x0B)), tabulación vertical.*/

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// Elimina los caracteres de control ASCII al inicio y final de $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>