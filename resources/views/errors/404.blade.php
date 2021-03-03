<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo</title>
        <style>
            .404error{
                color: red;
            }
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')
        
        <h1 class="404error">Hola, la pagina a la que quieres qcceder esta restringida o no es encontrada</h1>
            
        @endsection




    </body>
</html>
