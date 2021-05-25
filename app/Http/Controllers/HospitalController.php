<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\paciente;
use App\Models\doctor;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital=Hospital::all();
        return view('consultarHospital',compact('hospital'));
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
        if(count($buscarHospital)==0){
        $hospital= new Hospital();
        $hospital->nombre=$request->nombre;
        $hospital->direccion=$request->direccion;
        $hospital->telefono=$request->telefono;
        $hospital->save();
        return view('Hospital');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */   

    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */

    public function show_update(Request $request, $id)
    {
        $Buscarhospital=Hospital::findOrFail($id);
        return view('EditarHospital',compact('Buscarhospital'));         
    }

    public function update(Request $request, $id)
    {
        $hospital=Hospital::findOrFail($id);
        $hospital->nombre=$request->nombre;
        $hospital->direccion=$request->direccion;
        $hospital->telefono=$request->telefono;
        $hospital->save();
        $hospital=Hospital::all();
        return view('consultarHospital',compact('hospital'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacientes=Paciente::all();
        $doctores=Doctor::all();
        foreach ($pacientes as $paciente) {
            Paciente::destroy($paciente->id);
        }
        foreach ($doctores as $doctor) {
            Doctor::destroy($doctor->id);
        }
        Hospital::destroy($id);
        return view('Hospital');
    }
}
