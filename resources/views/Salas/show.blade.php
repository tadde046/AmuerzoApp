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
                background-image: url('https://www.bing.com/images/search?view=detailV2&ccid=ctgpOB4Y&id=46C54FBEA019C57CC14B493D6E927A9C838A8FEC&thid=OIP.ctgpOB4YvUmF0kyvINg7OgHaEj&mediaurl=https%3a%2f%2fi.pinimg.com%2f736x%2f5e%2fa2%2f4b%2f5ea24be7043cb239ec6d76859d88cdc8.jpg&exph=385&expw=626&q=imagen+para+background+image&simid=608036849934598793&ck=B5E482F83FA9C2831FC5E7361BA82054&selectedIndex=58&FORM=IRPRST');
            }
            .copi {
                /* display: block; */
                width: 120px;
                margin: 0 auto;
                padding: 10px;
                color: #ffffff;
                background: #990000;
                text-align: c;
                text-decoration-line: none;
            }

            .decoration{
                text-decoration-line: none;
                color: #990000;

            }
        </style>
    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')
            
        
        {{-- <h1>{{$sala->name}}</h1>
        <h1>{{$sala->url}}</h1> --}}
        {{-- @forelse ($sala as $salaItem)

        <li><a href="{{route('salas.show', $salaItem)}}">{{$salaItem->name}}</a></li>
            
        @empty
        <p>No hay salas disponibles :(</p>
            
        @endforelse
        hola --}}
        <h3>Estas en la sala creada y administrada por {{$sala->ceo}}</h3>
        <p> creada hace {{$sala ->created_at->diffForHumans() }}</p>
        @auth
            
        
            <form action="{{route('salas.destroy', $sala)}}" method="POST">

			    @csrf @method('DELETE')

                    <button>Eliminar</button>
        @endauth
            </form>
            <br>
                 <h5>Ponte en contacto con el para poder ponerse de acuerdo en cuanto a los datos!</h5>
                    @auth
                        
                    <a class="decoration" href="{{route('salas.calculadora', $sala)}}">Calcula los gastos finales</a>
                    <br>
                    <br>
                    @endauth
                    {{-- <p>{{ $resultado }}</p> --}}

            
                    <p>Comparte la sala con tus amigos!</p>
                    <a class="copi" href='javascript:getlink();'>Copiar URL</a>

        <script>//<![CDATA[
            function getlink() {
                var aux = document.createElement("input");
                    aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0]);
                    document.body.appendChild(aux);
                    aux.select();
                    document.execCommand("copy");
                    document.body.removeChild(aux);
                var css = document.createElement("style");
                var estilo = document.createTextNode("#aviso {position:fixed; z-index: 9999999; widht: 120px; top:30%;left:50%;margin-left: -60px;padding: 20px; background: gold;border-radius: 8px;font-size: 14px;font-family: sans-serif;}");
                    css.appendChild(estilo);
                    document.head.appendChild(css);
                var aviso = document.createElement("div");
                    aviso.setAttribute("id", "aviso");
                var contenido = document.createTextNode("URL copiada");
                    aviso.appendChild(contenido);
                    document.body.appendChild(aviso);
                    window.load = setTimeout("document.body.removeChild(aviso)", 2000);
        }
        //]]></script>

            
        @endsection