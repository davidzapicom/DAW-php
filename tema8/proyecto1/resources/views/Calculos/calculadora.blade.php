@extends('layouts.plantilla')
@section('title','Calculadora')

@section('content')
    <h1>Formulario</h1>
    <form action="{{route('resultado')}}" method="post">
        <label>Introduce dos números para sumar:</label>
        <br>
        <input type="number" name="n1">
        <br>
        <input type="number" name="n2">
        @csrf
        <input type="button" value="sumar" name="sumar">
        <input type="button" value="restar" name="restar">
        <input type="button" value="multiplicar" name="multiplicar">
        <input type="button" value="dividir" name="dividir">
    </form>
</body>
@ednsection