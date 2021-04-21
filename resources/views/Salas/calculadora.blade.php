<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almuerzo - Calcular</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            .color{
                color: black;
            }

        </style>
    </head>
    <body>
        @extends('layout')
        @section('contenidoGeneral')
        <h2>Hola  {{$sala->ceo}}, hora de sacar las cuentas!</h2>
        <p> creada hace {{$sala ->created_at->diffForHumans() }}</p>
        @if (Auth::user()->role =='admin')

        <button>Eliminar</button>
        <br>

    @endif
        <form method="get" action="{{route('salas.show', $sala)}}">
            <input type="number"  value="{{  $sala->cantidad }}" name="cantidad" placeholder="Cantidad de personas (minimo 1)">
            <h6>Si un campo va a estar vacio si o si se debe poner un 0</h6>

            <input type="text" readonly value="{{  $sala->operador1}}" name="operador1" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando1}}" name="operando1">
            <input type="text" readonly value="{{  $sala->operador2}}" name="operador2" placeholder="Nombre del usuario">
            <input type="number"  value="{{  $sala->operando2}}" name="operando2">
            <input type="text" readonly value="{{  $sala->operador3}}" name="operador3" placeholder="Nombre del usuario">
            <input type="number"  value="{{  $sala->operando3}}" name="operando3">
            <br>

            <input type="text" readonly value="{{  $sala->operador4}}" name="operador4" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando4}}" name="operando4">
            <input type="text" readonly value="{{  $sala->operador5}}" name="operador5" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando5}}" name="operando5">
            <input type="text" readonly value="{{  $sala->operador6}}" name="operador6" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando6}}" name="operando6">
            <br>

            <input type="text" readonly value="{{  $sala->operador7}}" name="operador7" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando7}}" name="operando7">
            <input type="text" readonly value="{{  $sala->operador8}}" name="operador8" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando8}}" name="operando8">
            <input type="text" readonly value="{{  $sala->operador9}}" name="operador9" placeholder="Nombre del usuario">
            <input type="number" value="{{  $sala->operando9}}" name="operando9">

            <input type="submit" value="enviar">
            <h4>Cada uno debe pagar {{$solucion}}</h4>

            <p>El total de todo sumado es de {{$suma}}</p>
            @if ($operandos < - 0)
            <p>F</p>

            @endif
            <p>{{$gasto1}}</p>
            <p>{{$gasto2}}</p>
            <p>{{$gasto3}}</p>
            <p>{{$gasto4}}</p>
            <p>{{$gasto5}}</p>
            <p>{{$gasto6}}</p>
            <p>{{$gasto7}}</p>
            <p>{{$gasto8}}</p>
            <p>{{$gasto9}}</p>
            <!-- Button trigger modal -->


        </form>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ticket!
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ticket de la sala "{{$sala->name}}"</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Debe
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                        <tr>
                            <th>
                            {{  $namee1}}
                            </th>
                            <th>
                                {{$gastoo1}}
                            </th>
                            <th>
                                {{$suma}}
                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee2}}
                            </th>
                            <th>
                                {{$gastoo2}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee3}}
                            </th>
                            <th>
                                {{$gastoo3}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee4}}
                            </th>
                            <th>
                                {{$gastoo4}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee5}}
                            </th>
                            <th>
                                {{$gastoo5}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee6}}
                            </th>
                            <th>
                                {{$gastoo6}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee7}}
                            </th>
                            <th>
                                {{$gastoo7}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee8}}
                            </th>
                            <th>
                                {{$gastoo8}}
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                {{$namee9}}
                            </th>
                            <th>
                                {{$gastoo9}}
                            </th>
                            <th>

                            </th>
                        </tr>

                    </table>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><a class="color" href='javascript:getlink();'>Comparte con tus amigos!</a></button>
                </div>
            </div>
            </div>
        </div>

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


        {{-- <a class="copiar" href='javascript:getlink();'>Comparte con tus amigos!</a> --}}






        @endsection




    </body>
</html>
