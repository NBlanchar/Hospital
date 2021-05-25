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
              <h3 class="login-heading mb-4">Consultar Doctor</h3>
              <form action="{{route('Doctor.show')}}" method="POST">
              @csrf
                <div class="form-label-group">
                  <input type="text" name="identificacion" id="inputIdDoctor" class="form-control" placeholder="Id Doctor" required autofocus>
                  <label for="inputIdDoctor">Id Doctor</label>
                </div>
        
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Consulta</button>                
              </form>
              @if($Buscardoctor!=null)
                <div class="mb-3">
            </div>            
          </div>
          <table class="table table-striped table-hover" style="text-align:center" id="listaconsultadoc">
  <h1 style="text-align:center">Respuesta</h1>

    <thead>
      <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Tipo de Sangre</th>        
        <th>Años de Experiencia</th>
        <th>Fecha de Nacimiento</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>{{$Buscardoctor->nombre}}</th>
        <th>{{$Buscardoctor->direccion}}</th>
        <th>{{$Buscardoctor->telefono}}</th>
        <th>{{$Buscardoctor->tipo_Sangre}}</th>
        <th>{{$Buscardoctor->experiencia}} años</th>
        <th>{{$Buscardoctor->nacimiento}}</th>

      </tr>
      @endif
    </tbody>
  <table>
  </div>


 <div id="listadoctores">
  <table class="table table-striped table-hover" style="text-align:center" id="listaconsultadoc">
  <h1 style="text-align:center">Lista de Doctores</h1>

    <thead>
      <tr>
        <th>Nombre</th>
        <th>Identificación</th>
        <th>Tipo de sangre</th>
        <th>Años de Experiencia</th>        
        <th>Update</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
  @foreach ( $doctores as $doctor)                      
      <tr>
        <th>{{$doctor->nombre}}</th>
        <th>{{$doctor->identificacion}}</th>
        <th>{{$doctor->tipo_Sangre}}</th>
        <th>{{$doctor->experiencia}} años</th>
        <th><form action="{{route('Doctor.show_update',$doctor->id)}}" method="POST">@csrf<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" id="btntabla1" type="submit">Editar</button> </form> </th>
        <th><form action="{{route('Doctor.destroy',$doctor->id)}}" method="POST">@csrf @method('delete')<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" id="btntabla2" type="submit">Eliminar</button> </form> </th>
      </tr>
    @endforeach
    </tbody>
</table>
</div>
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>




   
  


   
</body>
</html>