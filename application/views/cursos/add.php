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
    
    <title>Nuevo Curso</title>
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Nuevo Curso</h1>
        <form action="<?php echo base_url(); ?>cursos/registro/save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Curso</label>
                        <input type="text" name="nombre_curso" class="form-control" placeholder="Nombre curso">
                        <div class="invalid-feedback">
                            Please choose a nombre.
                        </div>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Nombre Docente</label>
                        <select class="custom-select" name="id_docente">
                            <option selected>Seleccione</option>
                            <?php $number=1; foreach($data as $key => $value): ?>
                            <option value="<?php echo $value->id_docente; ?>"><?php echo $value->nombre; ?> <?php echo $value->apellido; ?> </option>
                            
                        <?php  endforeach; ?>  
                    </select>
                    
                </div>
                
                <div>
                    <br>
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