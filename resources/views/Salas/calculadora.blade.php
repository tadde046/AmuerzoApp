<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            body{
               
            }
        </style>
    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')
        <h3>Hola  {{$sala->ceo}}, hora de sacar las cuentas!</h3><br>
        <form method="get" action="{{route('salas.calculadora', $sala)}}">
            <h6>Si un campo va a estar vacio si o si se debe poner un 0</h6>
            <input type="number" value=0 name="operando1">
            <input type="number" value=0 name="operando2">
            <input type="number" value=0 name="operando3">
            <br>
            <input type="number" value=0 name="operando4">
            <input type="number" value=0 name="operando5">
            <input type="number" value=0 name="operando6">
            <br>
            <input type="number" value=0 name="operando7">
            <input type="number" value=0 name="operando8">
            <input type="number" value=0 name="operando9">
            
            <input type="submit" value="enviar">
            <p>La suma es de {{$suma}}</p>
            <p>Y cada uno debe pagar {{$solucion}}</p>
            
        </form>
        



        
        @endsection




    </body>
</html>
