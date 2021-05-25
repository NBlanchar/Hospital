<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {           
        $Buscarpaciente=null;
        $pacientes=Paciente::all();
        return view('consultarPaciente',compact('pacientes'),compact('Buscarpaciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buscarHospital=Hospital::all();
        if(count($buscarHospital)==1){
            $paciente= new Paciente();
            $paciente->nombre= $request->nombre;
            $paciente->identificacion= $request->identificacion;
            $paciente->eps= $request->eps;
            $paciente->direccion= $request->direccion;
            $paciente->nombreAcompanante= $request->nombreAcompanante;
            $paciente->telAcompanante= $request->telAcompanante;
            $paciente->antecedentes=$request->antecedentes;
            $paciente->motivo_consulta="Sin Consulta";
            $paciente->diagnostico="Sin Diagnostico";
            $paciente->save();
            return view('Pacientes');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Buscarpaciente=Paciente::where('identificacion','=',$request->identificacion)->first();
        $pacientes=Paciente::all();
        return view('consultarPaciente',compact('pacientes'),compact('Buscarpaciente'));       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function triage(paciente $paciente, Request $request)
    {
        $Buscarpaciente=Paciente::where('identificacion','=',$request->identificacion)->first();
        $count=0;
        if($Buscarpaciente==null){
            return view('Pacientes');
        }else{
            $id=$Buscarpaciente->id;
            if($request->tos=="Activo"){
                $count++;
            }if($request->DRespirar=="Activo"){
                $count++;
            }if($request->fiebre=="Activo"){
                $count++;
            }if($request->escalofrio=="Activo"){
                $count++;
            }if($request->temblor=="Activo"){
                $count++;
            }if($request->DMuscular=="Activo"){
                $count++;
            }
            if($count>=2){
                $prueba='Posible Caso Covid-19';
            }else{
                $prueba='';
            }
            return view('Triage2',compact('prueba'),compact('id'));
        }
        

    }
    public function consultaTriage(Request $request, $id)
    {
        $paciente=Paciente::findOrFail($id);
            $paciente->motivo_consulta=$request->motivo_consulta;
            $paciente->diagnostico=$request->diagnostico;
            $paciente->save();
            $Buscarpaciente=null;
        $pacientes=Paciente::all();
        return view('consultarPaciente',compact('pacientes'),compact('Buscarpaciente')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show_update(Request $request, $id)
    {
        $Buscarpaciente=Paciente::findOrFail($id);
        return view('EditarPaciente',compact('Buscarpaciente'));
          
    }

     public function update(Request $request, $id)
    {
        $paciente=Paciente::findOrFail($id);
            $paciente->nombre= $request->nombre;
            $paciente->identificacion= $request->identificacion;
            $paciente->eps= $request->eps;
            $paciente->direccion= $request->direccion;
            $paciente->nombreAcompanante= $request->nombreAcompanante;
            $paciente->telAcompanante= $request->telAcompanante;
            $paciente->antecedentes=$request->antecedentes;
            $paciente->motivo_consulta="Sin Consulta";
            $paciente->diagnostico="Sin Diagnostico";
            $paciente->save();
            $Buscarpaciente=null;
        $pacientes=Paciente::all();
        return view('consultarPaciente',compact('pacientes'),compact('Buscarpaciente')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        $Buscarpaciente=null;
        $pacientes=Paciente::all();
        return view('consultarPaciente',compact('pacientes'),compact('Buscarpaciente')); 
    }
}
