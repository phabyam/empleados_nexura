<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <title>Lista de empleados</title>
  </head>
  <body>
    <div class="container p-2">
        
            
        <h3 class="text-muted">Lista de empleados</h3>
       <div><a href="{{ Route('empleados.create') }}" class="btn btn-primary float-right mb-2"><i class="fas fa-user-plus"></i> Crear</a></div>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                <th scope="col"><i class="fas fa-at"></i> Email</th>
                <th scope="col"><i class="fas fa-venus-mars"></i> Sexo</th>
                <th scope="col"><i class="fas fa-briefcase"></i> Área</th>
                <th scope="col"><i class="fas fa-envelope"></i> Boletín</th>
                <th scope="col" class="text-center">Modificar</th>
                <th scope="col" class="text-center">Eliminar</th>                
              </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->sexo }}</td>
                    <td>{{ $empleado->area->nombre }}</td>
                    <td>{{ $empleado->boletin?'Si':'No' }}</td>
                    <td class="text-center"><a href="{{ Route('empleados.edit', $empleado->id) }}" class="text-dark"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center"><a href="{{ Route('empleados.destroy', $empleado->id) }}" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>                                                
                @endforeach              
            </tbody>
          </table>  
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>