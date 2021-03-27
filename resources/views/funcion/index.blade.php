<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo - Funcionamiento</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')
        <h3>{{auth()->user() ? auth()->user()->name : 'Invitado'}} este es el funcionamiento de "Almuerzo"</h3>
        @guest
            <h6> que nada tenes que estar registrado!</h6>
        @endguest
        <p>Podes <a href="route(salas.create)">crear un sala</a> o si ya hay una creada que necesitas, mirar cual es en <a href="route(salas.index)">salas</a></p>
        <p>Para crear un sala tenes que poner la cantidad de personas y sus gastos, pero despues si no necesitas y te sobran campos tenes que ponerle null y un 0 a los campos restantantes, null y 0.</p>
            
        @endsection




    </body>
</html>