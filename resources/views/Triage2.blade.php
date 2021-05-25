<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/pacientes.css') !!}">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('Inicio') }}">SoftBioKernel</a>
    <form class="d-flex">
    <a class="btn btn-primary" href="{{ route('Paciente.index') }}" role="button">Consultar</a>



    </form>
  </div>
</nav>

<div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Area Pacientes</h3>
              <h1>{{$prueba}}</h1>
              <form action="{{route('hola',$id)}}" method="POST">
                @csrf
                @method('put')
                    <div class="mb-3">
                <label for="TextareaMotivosConsulta" class="form-label">Motivos de la consulta</label>
                     <textarea class="form-control" name="motivo_consulta" id="TextareaMotivosConsulta" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                <label for="TextareaDiagnosticoDoctor" class="form-label">Diagnostico del Doctor</label>
                     <textarea class="form-control" name="diagnostico" id="TextareaDiagnosticoDoctor" rows="3">{{$prueba}}</textarea>
                    </div>                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Registrar nuevo paciente</button>

              </form>



              

            </div>
          </div>
        </div>
      </div>
</div>

</body>
</html>