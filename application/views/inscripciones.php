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
    
    <title>Inscripcion</title>
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Inscripcion de Participantes a cursos</h1>
        <form action="<?php echo base_url(); ?>participantes/inscripcion/save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ingrese Codigo de Alumno</label>
                        <input type="text" name="id_participante" class="form-control" placeholder="Codigo">
                        <div class="invalid-feedback">
                            Please choose a nombre.
                        </div>
                    </div>

                    <div>
                        <label for="exampleInputEmail1">Seleciones Curso</label>
                        <select class="custom-select" name="id_curso">

                            <option selected>Seleccione</option>
                            <?php foreach($data as $key => $value): ?>
                            <option value="<?php echo $value->id_curso; ?>"><?php echo $value->nombre_curso; ?></option>
                            
                            <?php  endforeach; ?>  
                        </select>
                        <div>
                            <br>
                        </div>

                    </div>
                </div>

                <br>
                

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

   

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script >
        <?php  if($this->session->flashdata("success")): ?>

            Swal.fire({
              icon: 'success',
              title: 'Correcto ...',
              text: '<?php echo $this->session->flashdata("success") ?>',
              
            });
        <?php endif; ?>
    </script>
</body>
</html>