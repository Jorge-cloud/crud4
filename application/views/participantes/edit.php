<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Editar Participante</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Editar Participante</h1>
        <form action="<?php echo base_url(); ?>participantes/update/<?php echo $id_participante; ?>" class="mt-4" method="POST"> 
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombres" value="<?php echo $nombre ?>">
                        <div class="invalid-feedback">
                        Please choose a username.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellidos" value="<?php echo $apellido ?>">
                        <div class="invalid-feedback">
                        Please choose a username.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Correo</label>
                        <input type="email" name="correo" class="form-control"placeholder="Correo" value="<?php echo $correo ?>">
                        <div class="invalid-feedback">
                        Please choose a username.
                        </div>
                    </div>
                </div>
            

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>