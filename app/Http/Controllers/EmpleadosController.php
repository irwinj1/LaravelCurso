<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //
    public function saludo($nombre,$dias){
        $pago = 100;
        $nomina = $dias*$pago;
        //return view('empleado',compact('nombre','dias'));
        //return view('empleado',['nombre'=>$nombre,'dias'=>$dias]);
        return view('empleado')
        ->with('nomina',$nomina)
        ->with('nombre',$nombre)
        ->with('dias',$dias);
    }
    public function mensaje(){
        return 'Hola trabajador';
    }
    public function pago(){
        $dias = 7;
        $pagos=600;
        $nomina = $dias*$pagos;
        return "El pago de los empleados es $nomina";
    }
    public function nomina($diast,$pago){
        $nomina = $diast * $pago;
        dd($nomina);
        return "El pago es $nomina con dias $diast trabajados y pago diario de $pago";
    }
    public function salir(){
        return "salir";
    }
    public function vb(){
        return view('vistabootstrap');
    }
    public function vista1(){
        return view('vista1');
    }
    public function vista2(){
        return view('vista2');
    }
}