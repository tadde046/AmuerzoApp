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
        <p>Primero que nada estendamos para que funciona {{ config('app.name', 'Almuerzo') }}</p>
            
        @endsection




    </body>
</html>