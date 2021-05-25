<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/doctores.css') !!}">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"href="{{ route('Inicio') }}">SoftBioKernel</a>
    <form class="d-flex">
      
    <a class="btn btn-primary" href="{{ route('Doctor.index') }}" role="button">Consultar</a>

    </form>
  </div>
</nav>

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Area Doctores</h3>
              <form action="{{route('Doctor.store')}}" method="POST">
                @csrf
                <div class="form-label-group">
                  <input type="text" name="nombre" id="inputNombreC" class="form-control" placeholder="Nombre completo" required autofocus>
                  <label for="inputNombreC">Nombre Completo</label>
                </div>

                <div class="form-label-group">
                  <input type="number" name="identificacion" id="inputIdentificacion" class="form-control" placeholder="identificacion" required autofocus>
                  <label for="inputIdentificacion">Identificacion</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="direccion" id="inputDireccion" class="form-control" placeholder="Direccion" required autofocus>
                  <label for="inputDireccion">Direccion</label>
                </div>

                <div class="form-label-group">
                  <input type="number" name="telefono" id="inputTelefono" class="form-control" placeholder="Telefono" required autofocus>
                  <label for="inputTelefono">Telefono</label>
                </div>

                <select class="form-select" name="tipo_Sangre">
                    <option selected>Tipo de sangre</option>
                    <option value="A+">A+</option>
                    <option value="O+">O+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="O-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>

                <div class="form-label-group">
                  <input type="number" name="experiencia" id="inputAñosE" class="form-control" placeholder="Años de experiencia" required autofocus>
                  <label for="inputAñosE">Años de experiencia</label>
                </div>

                <div class="form-label-group">
                  <input type="date" name="nacimiento" id="inputNacimiento" class="form-control" placeholder="Fecha de nacimiento" required>
                  <label for="inputPassword">Fecha de nacimiento</label>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Registrar</button>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>