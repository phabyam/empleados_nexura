<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <title>Crear empleado</title>
</head>

<body>
    <div class="container p-2">


        <h3 class="text-muted">Editar empleado</h3>


        <form id="form_actualizar" action="{{ Route('empleados.update', $empleado->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}

            @include('empleado.form')

            <div class="form-group row">
                <div class="col-sm-10">
                    <button id="boton_actualizar" type="button" class="btn btn-primary">Actualizar</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location='{{Route('empleados.index')}}';">Cancelar</button>
                </div>
            </div>
        </form>

    </div>


    <!-- Warning Modal -->
    <div class="modal modal-danger fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="Crear"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  Está seguro que desea actualizar al empleado?                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" form="form_actualizar" class="btn btn-sm btn-primary">Si, ACTUALIZAR Empleado</button>
                </div>
               
            </div>
         
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js" crossorigin="anonymous">
</script>

<script src="{{ asset('js/validacion.js')}}"></script>

  
</body>

</html>
