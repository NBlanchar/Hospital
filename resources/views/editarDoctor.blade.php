<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/editar.css') !!}">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"href="{{ route('Inicio') }}">SoftBioKernel</a>
  </div>
</nav>

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Editar Doctor</h3>
              <form action="{{route('Doctor.update',$Buscardoctor->id)}}" method="POST">
                @csrf
                @method('put')                
                <div class="form-label-group">
                  <input type="text" name="nombre" id="inputNuevoNombreC" class="form-control" placeholder="Nombre completo" required autofocus value="{{$Buscardoctor->nombre}}">
                  <label for="inputNuevoNombreC">Nombre Completo</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="identificacion" id="inputIdentificacion" class="form-control" placeholder="identificacion" required autofocus value="{{$Buscardoctor->identificacion}}">
                  <label for="inputIdentificacion">Identificacion</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="direccion" id="inputNuevaDireccion" class="form-control" placeholder="Direccion" required autofocus value="{{$Buscardoctor->direccion}}">
                  <label for="inputNuevaDireccion">Direccion</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="telefono" id="inputNuevoTelefono" class="form-control" placeholder="Telefono" required autofocus value="{{$Buscardoctor->telefono}}">
                  <label for="inputNuevoTelefono">Telefono</label>
                </div>

                <select class="form-select" name="tipo_Sangre" value="{{$Buscardoctor->tipo_Sangre}}">
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
                  <input type="text" name="experiencia" value="{{$Buscardoctor->experiencia}}" id="inputNuevoAñosE" class="form-control" placeholder="Años de experiencia" required autofocus>
                  <label for="inputNuevoAñosE">Años de experiencia</label>
                </div>

                <div class="form-label-group">
                  <input type="date" name="nacimiento" value="{{$Buscardoctor->nacimiento}}" id="inputNuevoNacimiento" class="form-control" placeholder="Fecha de nacimiento" required>
                  <label for="inputNuevoNacimiento">Fecha de nacimiento</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Editar</button>                
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