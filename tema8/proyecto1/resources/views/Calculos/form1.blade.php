@extends('layouts.plantilla')
@section('title','Formulario')

@section('content')
    <h1>Formulario</h1>
    <form action="{{route('suma')}}" method="post">
        <label>Introduce dos números para sumar:</label>
        <br>
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        @csrf
        <input type="button" value="sumar" name="sumar">
    </form>
</body>
@ednsection