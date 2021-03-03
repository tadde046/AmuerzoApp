<?php

namespace App\Http\Controllers;

use App\Calculadora;
use App\Http\Requests\SaveSalasRequest;
use App\Integrantes;
use App\Sala;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Float_;
use phpDocumentor\Reflection\Types\Null_;
use PhpOption\None;

class SalasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
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
        return view('Salas.create', [
            'salas' => new Sala
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveSalasRequest $request)
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
        // $resultado = $num1 + $num2;

        return view('Salas.show', [


            'sala' => $sala
            // 'num1' => $num1,
            // 'num2' => $num2,
            // 'resultado' => $resultado


        ]);



    }
    
    


    public function calculadora(Sala $sala, Calculadora $calculadora)
    {
        // $operando1 = $_GET['operando1'];
        // $operando2 = $_GET['operando2'];
        // $operador = $_GET['operador'];
        
        // if($operador == "+"){
        //     $solucion = $operando1 + $operando2;
        // }else if($operador == "-"){
        //     $solucion = $operando1 - $operando2;
        // }else if($operador == "*"){
        //     $solucion = $operando1 * $operando2;
        // }else if($operador == "/"){
        //     $solucion = $operando1 / $operando2;
        // }
        // // echo "La solución es: ".$solucion;
        
        // $operando1 = is_null($_GET['operando1']) ?  0;
        
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
        $dividir = 9;
        $solucion = $suma / $dividir;

    
    return view('Salas.calculadora', [


        'sala' => $sala,
        'calculadora' => $calculadora, 
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
        'suma' => $suma
        

    ]);

    }
    

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
