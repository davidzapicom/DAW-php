<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller {

    public function formulario() {
        return view('Calculos.calculadora');
    }

    public function calculo(Request $request) {
        $a = $request -> n1;
        $b = $request -> n2;


        $resultado = $a + $b;
        
        
        
        return view('Calculos.resultado', compact("a","b","resultado"));
    }

    // public function resta($num1,$num2) {
    //     $resta = $num1 - $num2;
    //     return "El resultado de la resta de $num1 - $num2 es: $resta";
    // }

    // public function division($num1,$num2) {
    //     if ($num2 == 0) {
    //         return "No se puede hacer una división en la que el divisor sea 0";
    //     } else {
    //         $division = $num1 / $num2;
    //         return "El resultado de la division de $num1 - $num2 es: $division";
    //     }
    // }
}