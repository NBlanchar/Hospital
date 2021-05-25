<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/consultas.css') !!}">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"href="{{ route('Inicio') }}">SoftBioKernel</a>
    <form class="d-flex">
      

    </form>
  </div>
</nav>

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Consultar Pacientes</h3>
              <form action="{{route('Paciente.show')}}" method="POST">
              @csrf
              <div class="form-label-group">
                  <input type="text" name="identificacion" id="inputIdentificacion" class="form-control" placeholder="identificacion" required autofocus>
                  <label for="inputIdentificacion">Identificacion</label>
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Buscar</button>
              </div>
              </form>

                @if($Buscarpaciente!=null)                        
              <div class="mb-3">                
                <div class="text-center">
                  <a class="small" href="{{ route('Pacientes') }}">Registrese aqui</a>
                </div>
            </div>
           
          </div>
          <table class="table table-striped table-hover" style="text-align:center" id="listapaciente">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Identificación</th>
        <th>EPS</th>
        <th>Direccion</th>        
        <th>Nombre Acompañante</th>
        <th>Telefono Acompañante</th>
        <th>Antecedentes</th>
        <th>Motivo Consulta</th>
        <th>Diagnostico</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>{{$Buscarpaciente->nombre}}</th>
        <th>{{$Buscarpaciente->identificacion}}</th>
        <th>{{$Buscarpaciente->eps}}</th>
        <th>{{$Buscarpaciente->direccion}} </th>
        <th>{{$Buscarpaciente->nombreAcompanante}} </th>
        <th>{{$Buscarpaciente->telAcompanante}} </th>
        <th>{{$Buscarpaciente->antecedentes}} </th>
        <th>{{$Buscarpaciente->motivo_consulta}} </th>
        <th>{{$Buscarpaciente->diagnostico}} </th>
      </tr>
      @endif
    </tbody>
  <table>
        </div>
      </div>
    </div>
  </div>
 
</div>

<h1 style="text-align: center">Lista de Pacientes</h1>
  <table class="table table-striped table-hover" style="text-align:center" id="listapaciente">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Identificación</th>
        <th>Motivo de la ultima consulta</th>
        <th>Diagnostico</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
  @foreach ( $pacientes as $paciente)                      
      <tr>
        <th>{{$paciente->nombre}}</th>
        <th>{{$paciente->identificacion}}</th>
        <th>{{$paciente->motivo_consulta}}</th>
        <th>{{$paciente->diagnostico}}</th>
        <th><form action="{{route('Paciente.show_update',$paciente->id)}}" method="POST">@csrf<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" type="submit" id="btneditarpaciente">Editar</button> </form> </th>
        <th><form action="{{route('Paciente.destroy',$paciente->id)}}" method="POST">@csrf @method('delete')<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" id="btntabla2" type="submit">Eliminar</button></form></th>
      </tr>
    @endforeach
    </tbody>
</table>

   
  


   
</body>
</html>