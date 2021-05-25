<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/hospital.css') !!}">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('Inicio') }}">SoftBioKernel</a>
    <form class="d-flex">      
    <a class="btn btn-primary" href="{{ route('Hospital.index') }}" role="button">Consultar</a>
    </form>
  </div>
</nav>

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Area Hospital</h3>
              <form action="{{route('Hospital.store')}}" method="POST">
                @csrf
                <div class="form-label-group">
                  <input type="text" name="nombre" id="inputNombreH" class="form-control" placeholder="Nombre completo" required autofocus>
                  <label for="inputNombreH">Nombre Del Hospital</label>
                </div>
                <div class="form-label-group">
                  <input type="text" name="direccion"id="inputdireccion" class="form-control" placeholder="Direccion" required autofocus>
                  <label for="inputdireccion">Direccion Del Hospital</label>
                </div>
                <div class="form-label-group">
                  <input type="number" name="telefono"id="inputtelefono" class="form-control" placeholder="Nombre completo" required autofocus>
                  <label for="inputtelefono">Telefono Del Hospital</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Crear</button>
                <h6 class="login-heading mb-4">¡EL REGISTRO ESTA LIMITADO A 1 SOLO HOSPITAL!</h6>
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