<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DoctorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/doctores', function () {
    return view('Doctores');
});

Route::get('/pacientes', function () {
    return view('Pacientes');
});

Route::get('/hospital', function () {
    return view('Hospital');
});

Route::view('consulta','consultar')->name('consultar');
Route::view('consultadoc','consultardoc')->name('consultardoc');


Route::view('edita','editar')->name('editar');
Route::view('editadoc','editardoc')->name('editardoc');


Route::view('elimina','eliminar')->name('eliminar');
Route::view('eliminadoc','eliminardoc')->name('eliminardoc');




//Inicio
Route::view('/','Inicio')->name('Inicio');

//Hospital
Route::view('hospital','Hospital')->name('Hospital');
Route::post('Hospital', [HospitalController::class, 'store'])->name('Hospital.store');
Route::get('ConsultarHospital',[HospitalController::class, 'index'])->name('Hospital.index');
Route::post('EditarHospital/{id}',[HospitalController::class, 'show_update'])->name('Hospital.show_update');
Route::put('EditarHospital/{id}',[HospitalController::class, 'update'])->name('Hospital.update');
Route::delete('EliminarHospital/{id}',[HospitalController::class, 'destroy'])->name('Hospital.destroy');

//Paciente
Route::view('Paciente','Pacientes')->name('Pacientes');
Route::post('EditarPaciente/{id}',[PacienteController::class, 'show_update'])->name('Paciente.show_update');
Route::put('EditarPaciente/{id}',[PacienteController::class, 'update'])->name('Paciente.update');
Route::delete('EliminarPaciente/{id}',[PacienteController::class, 'destroy'])->name('Paciente.destroy');
Route::get('ConsultarPacientes',[PacienteController::class, 'index'])->name('Paciente.index');
Route::post('BuscarPaciente',[PacienteController::class, 'show'])->name('Paciente.show');
Route::post('Paciente', [PacienteController::class, 'store'])->name('Paciente.store');
//Triage
Route::view('Triage','Triage1')->name('Triage');
Route::post('Triage',[PacienteController::class, 'triage'])->name('Paciente.triage');
Route::view('ConsultaTriage','Triage2')->name('ConsultaTriage');
Route::put('ConsultaPaciente/{id}',[PacienteController::class, 'consultaTriage'])->name('hola');
//Doctores
Route::view('Doctores','Doctores')->name('Doctores');
Route::post('Doctor',[DoctorController::class, 'store'])->name('Doctor.store');
Route::get('ConsultarDoctores',[DoctorController::class, 'index'])->name('Doctor.index');
Route::post('BuscarDoctor',[DoctorController::class, 'show'])->name('Doctor.show');
Route::post('EditarDoctor/{id}',[DoctorController::class, 'show_update'])->name('Doctor.show_update');
Route::put('EditarDosctor/{id}',[DoctorController::class, 'update'])->name('Doctor.update');
Route::delete('EliminarDoctor/{id}',[DoctorController::class, 'destroy'])->name('Doctor.destroy');





