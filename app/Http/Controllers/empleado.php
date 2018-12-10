<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use App\cines;


class empleado extends Controller
{
    public function altaempleados()
 {
     $cines=cines::orderBy('nombre','Asc')->get();
     
    $clavequesigue = empleados::withTrashed()->orderBy('ide','nombre')
								->take(1)
								->get();
								
 	 	           $ide=$clavequesigue[0]->id_e+1;
 	 	            return view("sistema.altaempleado")
 	 	            ->with('cines',$cines);
 }

 public function guardaempleados(Request $request)

 {
	$ide=$request->ide;
	$nombre=$request->nombre;
	$edad=$request->edad;
	$sexo=$request->sexo;

	$this->validate($request,[
		'nombre'=>['requiered','regex:/^[A-Z][A-Z,a-z,ñ,á,é,í,ó,ú]+$/'],
        'edad'=>['requered|interger|min:18|max:100']
		]);
	$empleado=new empleado;
	$empleado->ide =$request->ide;
	$empleado->nombre =$request->nombre;
	$empleado->edad =$request->edad;
	$empleado->sexo =$request->sexo;
	$empleado->idcine =$request->idcine;

	$empleado->save();
	$proceso="ALTA EMPLEADO";
	$mensaje="REGISTRO GUSRDADO CORRECTAMENTE";
	return view('sistema.mensaje')
	->with('proCeso',$proceso)
	->with('mensaje',$mensaje);
}
}