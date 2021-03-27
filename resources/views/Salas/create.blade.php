<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo - Salas - Crear</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            body{
                background-image: url('https://www.bing.com/images/search?view=detailV2&ccid=ctgpOB4Y&id=46C54FBEA019C57CC14B493D6E927A9C838A8FEC&thid=OIP.ctgpOB4YvUmF0kyvINg7OgHaEj&mediaurl=https%3a%2f%2fi.pinimg.com%2f736x%2f5e%2fa2%2f4b%2f5ea24be7043cb239ec6d76859d88cdc8.jpg&exph=385&expw=626&q=imagen+para+background+image&simid=608036849934598793&ck=B5E482F83FA9C2831FC5E7361BA82054&selectedIndex=58&FORM=IRPRST')
            }
        </style>
    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')

        <h1>Estas a punto de crear una nueva sala :)</h1> <br>
        <form method="POST" action="{{route('salas.store')}}">
            @csrf
            
            <label>
                <input type="text" name="name" value="{{ old('name', $salas->name)}}" placeholder="Nombre de la sala">
            </label>

            <label>
                <input type="text" name="url" value="{{ old('url', $salas->url)}}" placeholder="Url de la sala">
            </label>

            <label>
                <input type="text" name="ceo" value="{{Auth()->user()->name}}" placeholder="Nombre del creador y director de la sala">
            </label>

            <label>
                <input type="number" name="cantidad" value=1 >
            </label>

            <input type="text"     name="operador1" placeholder="Nombre del usuario">
            <input type="number"   name="operando1">
            <input type="text"     name="operador2" placeholder="Nombre del usuario">
            <input type="number"    name="operando2">
            <input type="text"     name="operador3" placeholder="Nombre del usuario">
            <input type="number"    name="operando3">
            <br>
            
            <input type="text"     name="operador4" placeholder="Nombre del usuario">
            <input type="number"   name="operando4">
            <input type="text"     name="operador5" placeholder="Nombre del usuario">
            <input type="number"   name="operando5">
            <input type="text"     name="operador6" placeholder="Nombre del usuario">
            <input type="number"   name="operando6">
            <br>
            
            <input type="text"     name="operador7" placeholder="Nombre del usuario">
            <input type="number"   name="operando7">
            <input type="text"     name="operador8" placeholder="Nombre del usuario">
            <input type="number"   name="operando8">
            <input type="text"     name="operador9" placeholder="Nombre del usuario">
            <input type="number"   name="operando9">


            
            

            <button>Guardar</button>



        </form>
            
        
            
        @endsection