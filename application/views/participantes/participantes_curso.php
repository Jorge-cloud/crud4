<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>

    <title>Inscritos curso c</title>
</head>
<body>

    <div class="container">

        <h1 class="mt-5">Lista de Inscritos </h1>
        <div class="text-right">
            <br>
            <!--<a href="<?php echo base_url(); ?>participantes/inscripcion/<?php echo $id; ?>" class="btn btn-info">Añadir Nuevo</a>-->
        </div>
        <table class="table mt-4 table-bordered table-hover">
            <thead class="thead-light ">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $number=1; foreach($data as $key => $value): ?>
                <tr>
                    <th scope="row"><?php echo $number++; ?></th>
                    <td><?php echo $value->nombre; ?></td>
                    <td><?php echo $value->apellido; ?></td>
                    <td><?php echo $value->correo; ?></td>
                    <td><?php echo $value->nombre_curso; ?></td>
                    <td><?php echo $value->id_curso; ?></td>
                    <td><?php echo $value->id_capacitacion; ?></td>
                    <td>

                        <!--boton eliminar-->
                        <div class="d-flex">

                            <!--boton editar-->
                            <a href="<?php echo base_url(); ?>participantes/vista-update/<?php echo $value->id_participante; ?>" class="btn btn-primary"><ion-icon name="pencil"></ion-icon></a> 
                            <form method="post" action="<?php echo base_url(); ?>inscripcion/delete/<?php echo $value->id_capacitacion; ?>">
                                <input  hidden="" type=""  name="id_curso" value="<?php echo $value->id_curso; ?>">
                                <button type="submit" class="btn btn-danger ml-2" >
                                 <ion-icon name="trash-outline"></ion-icon></ion-icon>
                             </button>

                         </form> 

                     </div>




                 </td>
             </tr>
         <?php  endforeach; ?>
     </tbody>
 </table>
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

</html>