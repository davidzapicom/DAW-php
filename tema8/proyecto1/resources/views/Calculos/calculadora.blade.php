@extends('layouts.plantilla')
@section('title','Calculadora')

@section('content')
    <h1>Formulario</h1>
    <form action="{{route('resultado')}}" method="post">
        <label>Introduce dos números para operar:</label>
        <br>
        <input type="number" name="n1">
        <br><br>
        <input type="number" name="n2">
        @csrf
        <br><br>
        <button type="submit" name="sumar">Sumar</button>
        <button type="submit" name="restar">Restar</button>
        <button type="submit" name="multiplicar">Multiplicar</button>
        <button type="submit" name="dividir">Dividir</button>
    </form>
</body>
@endsection