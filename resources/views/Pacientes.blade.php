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
              <form action="{{route('Paciente.store')}}" method="POST">
                @csrf
                <div class="form-label-group">
                  <input type="text" id="inputNombreCP" name="nombre" class="form-control" placeholder="Nombre completo" required autofocus>
                  <label for="inputNombreCP">Nombre Completo</label>
                </div>

                <div class="form-label-group">
                  <input type="number" name="identificacion" id="inputIdentificacion" class="form-control" placeholder="identificacion" required autofocus>
                  <label for="inputIdentificacion">Identificacion</label>
                </div>

                <select class="form-select" name="eps">
                    <option selected>EPS</option>
                    <option value="SURA">SURA</option>
                    <option value="COOMEVA">COOMEVA</option>
                    <option value="SUSALUD">SUSALUD</option>
                    <option value="CAFESALUD">CAFESALUD</option>
                    <option value="VIVA1A">VIVA1A</option>
                </select>

                <div class="form-label-group">
                  <input type="text" name="direccion" id="inputDireccionP" class="form-control" placeholder="Direccion" required autofocus>
                  <label for="inputDireccionP">Direccion</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="nombreAcompanante"id="inputNombreAcomP" class="form-control" placeholder="Nombre del Acompañante" required autofocus>
                  <label for="inputNombreAcomP">Nombre del Acompañante</label>
                </div>

                <div class="form-label-group">
                  <input type="number" name="telAcompanante" id="inputTelefonoP" class="form-control" placeholder="Telefono" required autofocus>
                  <label for="inputTelefonoP">Telefono</label>
                </div>

                <select class="form-select">
                    <option selected>Antecedentes</option>
                        <option value="1">SI</option>
                            <option value="2">NO</option>



                </select>

                <div class="mb-3">
                <label for="TextareaAntecedentes" class="form-label">Si la opcion marcada fue "SI" Indique por favor cuales son sus antecedentes</label>
                     <textarea class="form-control" id="TextareaAntecedentes" name="antecedentes" rows="3"></textarea>
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