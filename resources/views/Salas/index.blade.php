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
                background-image: url('https://www.bing.com/images/search?view=detailV2&ccid=ctgpOB4Y&id=46C54FBEA019C57CC14B493D6E927A9C838A8FEC&thid=OIP.ctgpOB4YvUmF0kyvINg7OgHaEj&mediaurl=https%3a%2f%2fi.pinimg.com%2f736x%2f5e%2fa2%2f4b%2f5ea24be7043cb239ec6d76859d88cdc8.jpg&exph=385&expw=626&q=imagen+para+background+image&simid=608036849934598793&ck=B5E482F83FA9C2831FC5E7361BA82054&selectedIndex=58&FORM=IRPRST')
            }

            .crear{
                text-decoration-line: none;
            }
        </style>
    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')

                
        
                {{-- @auth
                
                    <a class="crear" href="{{route('salas.create')}}">Crea una nueva sala</a> <br> <br>
                
                @endauth --}}

                @guest
                    @if (Route::has('register'))

                    <h3> No puedes crear salas porque no estas registrado <a class="" href="{{ route('register') }}">Registarte aqui!</a> :}</h3>
                    
                        
                    @endif
                    @else
                    <h1>Crea una sala</h1>
                    <a class="crear" href="{{route('salas.create')}}">Crea una nueva sala</a> <br> <br>
                @endguest
                 
            <ul>
                @forelse ($salas as $salasItem)

                    <li><a href="{{route('salas.show', $salasItem)}}">{{$salasItem->name}}</a></li>
                
                @empty
                    <p>No hay salas disponibles :(</p>
                
                @endforelse
                            <br>
                    {{$salas->links()}}
            </ul>

            
        
            
        @endsection




    </body>
</html>