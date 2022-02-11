<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function suma($num1,$num2) {
        $suma = $num1 + $num2;
        return "El resultado de la suma de $num1 - $num2 es: $suma";
    }

    public function resta($num1,$num2) {
        $resta = $num1 - $num2;
        return "El resultado de la resta de $num1 - $num2 es: $resta";
    }
}
