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
              <form form action="{{route('Paciente.triage')}}" method="POST">
                @csrf
              <div class="form-label-group">
                  <input type="text" name="identificacion" id="inputIdentificacion" class="form-control" placeholder="identificacion" required autofocus>
                  <label for="inputIdentificacion">Identificacion</label>
                </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tos" value="Activo" id="TosCheck">
                     <label class="form-check-label" for="TosCheck">
                         Tos
                            </label>
                            </div>
                            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="DRespirar" value="Activo" id="DificRespCheck">
                     <label class="form-check-label" for="DificRespCheck">
                         Dificultad para respirar
                            </label>
                            </div>
                            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fiebre" value="Activo" id="FiebreCheck">
                     <label class="form-check-label" for="FiebreCheck">
                         Fiebre
                            </label>
                            </div>
                            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="escalofrio" value="Activo" id="EscalofriosCheck">
                     <label class="form-check-label" for="EscalofriosCheck">
                         Escalofrios
                            </label>
                            </div>
                            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="temblor" value="Activo" id="TembloresCheck">
                     <label class="form-check-label" for="TembloresCheck">
                         Temblores y escalofrios que no ceden
                            </label>
                            </div>
                            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="DMuscular" value="Activo" id="DolorMusCheck">
                     <label class="form-check-label" for="DolorMusCheck">
                         Dolor muscular
                            </label>
                            </div>                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Registrar test COVID 19</button>              
              </form>

              

            </div>
          </div>
        </div>
      </div>
</div>

</body>
</html>