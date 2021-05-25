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
    @foreach ( $hospital as $aux)
    <form action="{{route('Hospital.show_update',$aux->id)}}" method="POST">@csrf<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" id="btneditar" type="submit">Editar</button> </form> 
    <form action="{{route('Hospital.destroy',$aux->id)}}" method="POST">@csrf @method('delete')<button class="btn btn-lg btn-primary btn-blo-ck btn-login text-uppercase font-weight-bold mb-2" id="btneliminar" type="submit">Eliminar</button> </form>
  </div>
</nav>

      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-4 mx-auto">
              <h3 class="login-heading mb-4">Consultar Hospital</h3>
              <div class="mb-3">

                <table class="table table-striped table-hover" style="text-align:center" id="consultahospital">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
                       
      <tr>
        <th>{{$aux->nombre}}</th>
        <th>{{$aux->direccion}}</th>
        <th>{{$aux->telefono}}</th>
      </tr>
    @endforeach
    </tbody>
  <table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



   
  


   
</body>
</html>