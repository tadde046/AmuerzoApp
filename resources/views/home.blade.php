<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo - Home</title>

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
                <div class="contenido">
                    
                    <h3>Hola {{auth()->user() ? auth()->user()->name : 'invitado'}}, Bienvenido!</h3><br>
                     <p>podes <a href="{{route('salas.create')}}">crear una sala</a> o podes ver las <a href="{{route('funciones.index')}}">funcionamiento</a></p>
                 
                    </div>
            @endsection




    </body>
</html>
