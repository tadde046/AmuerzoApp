<?php

namespace App\Http\Controllers;

use App\Calculadora;
use App\Http\Requests\SaveSalasRequest;
use App\Sala;

use Illuminate\Http\Request;
use PhpOption\None;

class SalasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('Salas.index', [
            
        'salas' => Sala::latest()->paginate(10),
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantidad = isset($_GET['cantidad']) ? $_GET['cantidad'] : 1;

        $operando1 = isset($_GET['operando1']) ? $_GET['operando1'] : 0;
        $operando2 = isset($_GET['operando2']) ? $_GET['operando2'] : 0;
        $operando3 = isset($_GET['operando3']) ? $_GET['operando3'] : 0;
        $operando4 = isset($_GET['operando4']) ? $_GET['operando4'] : 0;
        $operando5 = isset($_GET['operando5']) ? $_GET['operando5'] : 0;
        $operando6 = isset($_GET['operando6']) ? $_GET['operando6'] : 0;
        $operando7 = isset($_GET['operando7']) ? $_GET['operando7'] : 0;
        $operando8 = isset($_GET['operando8']) ? $_GET['operando8'] : 0;
        $operando9 = isset($_GET['operando9']) ? $_GET['operando9'] : 0;
        $suma = $operando1 + $operando2 + $operando3 + $operando4 + $operando5 + $operando6 + $operando7 + $operando8 + $operando9;
        $solucion = $suma / $cantidad;
        return view('Salas.create', [
            'salas' => new Sala,
            'operando1' => $operando1,
            'operando2' => $operando2,
            'operando3' => $operando3,
            'operando4' => $operando4,
            'operando5' => $operando5,
            'operando6' => $operando6,
            'operando7' => $operando7,
            'operando8' => $operando8,
            'operando9' => $operando9,
            'solucion' => $solucion,
            'cantidad' => $cantidad,
            'suma' => $suma,
            'solucion' => $solucion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveSalasRequest $request )
    {


       
        Sala::create( $request->validated() ); //recibimos todo con all y con only solo lo que definimos, pero con fields solo lo que definimos mas arriba

          return redirect()->route('salas.index')->with('status', 'La sala ha sido creado con exito!');
      
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        // $num1 = 1;
        // $num2 = 12;
        $operador1 = isset($_GET['operador1']) ? $_GET['operador1'] : 0;
        $operador2 = isset($_GET['operador2']) ? $_GET['operador2'] : 0;
        $operador3 = isset($_GET['operador3']) ? $_GET['operador3'] : 0;
        $operador4 = isset($_GET['operador4']) ? $_GET['operador4'] : 0;
        $operador5 = isset($_GET['operador5']) ? $_GET['operador5'] : 0;
        $operador6 = isset($_GET['operador6']) ? $_GET['operador6'] : 0;
        $operador7 = isset($_GET['operador7']) ? $_GET['operador7'] : 0;
        $operador8 = isset($_GET['operador8']) ? $_GET['operador8'] : 0;
        $operador9 = isset($_GET['operador9']) ? $_GET['operador9'] : 0;
        // $resultado = $num1 + $num2;
        $cantidad = isset($_GET['cantidad']) ? $_GET['cantidad'] : 1;
        $operando1 = isset($_GET['operando1']) ? $_GET['operando1'] : 0;
        $operando2 = isset($_GET['operando2']) ? $_GET['operando2'] : 0;
        $operando3 = isset($_GET['operando3']) ? $_GET['operando3'] : 0;
        $operando4 = isset($_GET['operando4']) ? $_GET['operando4'] : 0;
        $operando5 = isset($_GET['operando5']) ? $_GET['operando5'] : 0;
        $operando6 = isset($_GET['operando6']) ? $_GET['operando6'] : 0;
        $operando7 = isset($_GET['operando7']) ? $_GET['operando7'] : 0;
        $operando8 = isset($_GET['operando8']) ? $_GET['operando8'] : 0;
        $operando9 = isset($_GET['operando9']) ? $_GET['operando9'] : 0;
        $suma = $operando1 + $operando2 + $operando3 + $operando4 + $operando5 + $operando6 + $operando7 + $operando8 + $operando9;
        $solucion = $suma / $cantidad;
        $msj = " debe pagar ";
        
        // $msjdebiendo = " le deben pagar ";
        // $a = "a ";
        $operadores = $operador1.$operador2.$operador3.$operador4.$operador5.$operador6.$operador7.$operador8.$operador9;
        $operandos = $operando1.$operando2.$operando3.$operando4.$operando5.$operando6.$operando7.$operando8.$operando9;
        // $total1 = $operador1.$msj.$operando1;
        
        
        
        // $gasto1 = $solucion - $operando1;git add .

        if ($operando1 > 0 || $sala->operador1 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo1 =$solucion - $operando1;
            $gasto1 = $sala->operador1.$msj.$gastardo1 ;
            $namee1 = $sala->operador1;
            $gastoo1 = $gastardo1;
        }
        
        else {
            $gasto1 = null;
            $namee1 = null;
            $gastoo1 = null;

        }
        // if ($operando1 > -0) {
        //     $deben1 = $a.$operador1.$msjdebiendo.$solucion;
        // }
        if ($operando2 > 0 || $sala->operador2 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo2 =$solucion - $operando2;
            $gasto2 = $sala->operador2.$msj.$gastardo2 ;
            $namee2 = $sala->operador2;
            $gastoo2 = $gastardo2;
        }
        else {
            $gasto2 = null;
            $namee2 = null;
            $gastoo2 = null;
        }
        if ($operando3 > 0 || $sala->operador3 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo3 =$solucion - $operando3;
            $gasto3 = $sala->operador3.$msj.$gastardo3 ;
            $namee3 = $sala->operador3;
            $gastoo3 = $gastardo3;
        }
        else {
            $gasto3 = null;
            $namee3 = null;
            $gastoo3 = null;
        }
        if ($operando4 > 0 || $sala->operador4 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo4 =$solucion - $operando4;
            $gasto4 = $sala->operador4.$msj.$gastardo4 ;
            $namee4 = $sala->operador4;
            $gastoo4 = $gastardo4;
        }

        else {
            $gasto4 = null;
            $namee4 = null;
            $gastoo4 = null;
        }

        
        
        if ($operando5 > 0 || $sala->operador5 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo5 =$solucion - $operando5;
            $gasto5 = $sala->operador5.$msj.$gastardo5 ;
            $namee5 = $sala->operador5;
            $gastoo5 = $gastardo5;
        }
        else {
            $gasto5 = null;
            $namee5 = null;
            $gastoo5 = null;
        }
        if ($operando6 > 0 || $sala->operador6 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo6 =$solucion - $operando6;
            $gasto6 = $sala->operador6.$msj.$gastardo6;
            $namee6 = $sala->operador6;
            $gastoo6 = $gastardo6;
        }
        else {
            $gasto6 = null;
            $namee6 = null;
            $gastoo6 = null;
        }
        if ($operando7 > 0 || $sala->operador7 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo7 =$solucion - $operando7;
            $gasto7 = $sala->operador7.$msj.$gastardo7 ;
            $namee7 = $sala->operador7;
            $gastoo7 = $gastardo7;
        }
        else {
            $gasto7 = null;
            $namee7 = null;
            $gastoo7 = null;
        }
        if ($operando8 > 0 || $sala->operador8 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo8 =$solucion - $operando8;
            $gasto8 = $sala->operador8.$msj.$gastardo8 ;
            $namee8 = $sala->operador8;
            $gastoo8 = $gastardo8;
        }
        else {
            $gasto8 = null;
            $namee8 = null;
            $gastoo8 = null;
        }
        if ($operando9 > 0 || $sala->operador9 != "null"  ) {
            // $gasto1 = $solucion - $operando1;
            $gastardo9 = $solucion - $operando9;
            $gasto9 = $sala->operador9.$msj.$gastardo9 ;
            $namee9 = $sala->operador9;
            $gastoo9 = $gastardo9;
        }
        else {
            $gasto9 = null;
            $namee9 = null;
            $gastoo9 = null;
        }
        
        // $gasto2 = $solucion - $operando2;
        // $gasto3 = $solucion - $operando3;
        // $gasto4 = $solucion - $operando4;
        // $gasto5 = $solucion - $operando5;
        // $gasto6 = $solucion - $operando6;
        // $gasto7 = $solucion - $operando7;
        // $gasto8 = $solucion - $operando8;
        // $gasto9 = $solucion - $operando9;
        // suma todo y lo divide entre la cantidad
        //y le resta la division a lo que gasto
        
        return view('Salas.calculadora', [


            'sala' => $sala,
            'operador1' => $operador1,
            'operador2' => $operador2,
            'operador3' => $operador3,
            'operador4' => $operador4,
            'operador5' => $operador5,
            'operador6' => $operador6,
            'operador7' => $operador7,
            'operador8' => $operador8,
            'operador9' => $operador9,
            'operando1' => $operando1,
            'operando2' => $operando2,
            'operando3' => $operando3,
            'operando4' => $operando4,
            'operando5' => $operando5,
            'operando6' => $operando6,
            'operando7' => $operando7,
            'operando8' => $operando8,
            'operando9' => $operando9,
            'solucion' => $solucion,
            'cantidad' => $cantidad,
            'suma' => $suma,
            'operadores' => $operadores,
            'operandos' => $operandos,
            'solucion' => $solucion,
            'gasto1' => $gasto1,
            'gasto2' => $gasto2,
            'gasto3' => $gasto3,
            'gasto4' => $gasto4,
            'gasto5' => $gasto5,
            'gasto6' => $gasto6,
            'gasto7' => $gasto7,
            'gasto8' => $gasto8,
            'gasto9' => $gasto9,
            'namee1' => $namee1,
            'namee2' => $namee2,
            'namee3' => $namee3,
            'namee4' => $namee4,
            'namee5' => $namee5,
            'namee6' => $namee6,
            'namee7' => $namee7,
            'namee8' => $namee8,
            'namee9' => $namee9,
            'gastoo1' => $gastoo1,
            'gastoo2' => $gastoo2,
            'gastoo3' => $gastoo3,
            'gastoo4' => $gastoo4,
            'gastoo5' => $gastoo5,
            'gastoo6' => $gastoo6,
            'gastoo7' => $gastoo7,
            'gastoo8' => $gastoo8,
            'gastoo9' => $gastoo9,

            // 'deben1' => $deben1
            
            // 'num1' => $num1,
            // 'num2' => $num2,
            // 'resultado' => $resultado


        ]);



    }
    
    


    // public function calculadora(Sala $sala, Calculadora $calculadora)
    // {
    //     // $operando1 = $_GET['operando1'];
    //     // $operando2 = $_GET['operando2'];
    //     // $operador = $_GET['operador'];
        
    //     // if($operador == "+"){
    //     //     $solucion = $operando1 + $operando2;
    //     // }else if($operador == "-"){
    //     //     $solucion = $operando1 - $operando2;
    //     // }else if($operador == "*"){
    //     //     $solucion = $operando1 * $operando2;
    //     // }else if($operador == "/"){
    //     //     $solucion = $operando1 / $operando2;
    //     // }
    //     // // echo "La solución es: ".$solucion;
        
    //     // $operando1 = is_null($_GET['operando1']) ?  0;
    //     $cantidadDePersonas = isset($_GET['cantidad']) ? $_GET['cantidad'] : 1;
    //     $operando1 = isset($_GET['operando1']) ? $_GET['operando1'] : 0;
    //     $operando2 = isset($_GET['operando2']) ? $_GET['operando2'] : 0;
    //     $operando3 = isset($_GET['operando3']) ? $_GET['operando3'] : 0;
    //     $operando4 = isset($_GET['operando4']) ? $_GET['operando4'] : 0;
    //     $operando5 = isset($_GET['operando5']) ? $_GET['operando5'] : 0;
    //     $operando6 = isset($_GET['operando6']) ? $_GET['operando6'] : 0;
    //     $operando7 = isset($_GET['operando7']) ? $_GET['operando7'] : 0;
    //     $operando8 = isset($_GET['operando8']) ? $_GET['operando8'] : 0;
    //     $operando9 = isset($_GET['operando9']) ? $_GET['operando9'] : 0;
    //     $suma = $operando1 + $operando2 + $operando3 + $operando4 + $operando5 + $operando6 + $operando7 + $operando8 + $operando9;
    //     $solucion = $suma / $cantidadDePersonas;

    
    // return view('Salas.calculadora', [


    //     'sala' => $sala,
    //     'calculadora' => $calculadora, 
    //     'operando1' => $operando1,
    //     'operando2' => $operando2,
    //     'operando3' => $operando3,
    //     'operando4' => $operando4,
    //     'operando5' => $operando5,
    //     'operando6' => $operando6,
    //     'operando7' => $operando7,
    //     'operando8' => $operando8,
    //     'operando9' => $operando9,
    //     'solucion' => $solucion,
    //     'cantidad' => $cantidadDePersonas,
    //     'suma' => $suma
        

    // ]);

    //}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();

        return redirect()->route('salas.index', $sala)->with('status', 'La sala ha sido removida con exito!');
    }
}
