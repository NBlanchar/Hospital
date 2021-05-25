<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Buscardoctor=null;
        $doctores=Doctor::all();
        return view('consultarDoctor',compact('doctores'),compact('Buscardoctor'));
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
        $doctor= new Doctor();
        $doctor->nombre= $request->nombre;
        $doctor->identificacion=$request->identificacion;
        $doctor->direccion= $request->direccion;
        $doctor->telefono= $request->telefono;
        $doctor->tipo_Sangre= $request->tipo_Sangre;
        $doctor->experiencia= $request->experiencia;
        $doctor->nacimiento= $request->nacimiento;
        $doctor->save();
        return view('Doctores');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Buscardoctor=Doctor::where('identificacion','=',$request->identificacion)->first();
        $doctores=Doctor::all();
        return view('consultarDoctor',compact('doctores'),compact('Buscardoctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show_update(Request $request, $id)
    {
        $Buscardoctor=Doctor::findOrFail($id);
        return view('editarDoctor',compact('Buscardoctor'));
          
    }
    
     public function update(Request $request,$id)
    {
        $doctor=Doctor::findOrFail($id);
        $doctor->nombre= $request->nombre;
        $doctor->identificacion=$request->identificacion;
        $doctor->direccion= $request->direccion;
        $doctor->telefono= $request->telefono;
        $doctor->tipo_Sangre= $request->tipo_Sangre;
        $doctor->experiencia= $request->experiencia;
        $doctor->nacimiento= $request->nacimiento;
        $doctor->save();
        $Buscardoctor=null;
        $doctores=Doctor::all();
        return view('consultarDoctor',compact('doctores'),compact('Buscardoctor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        $Buscardoctor=null;
        $doctores=Doctor::all();
        return view('consultarDoctor',compact('doctores'),compact('Buscardoctor'));
    }
}
