  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Font Roboto CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <style>body{font-family:"Roboto" !important;}</style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary lead" style="padding-left: 320px;">
      <a class="navbar-brand" href="#"><ion-icon name="qr-code-sharp"></ion-icon></a>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url(); ?>cursos"><h3>Cursos</h3> </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url(); ?>inscripcion"><h3>Incripciones</h3></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url(); ?>participantes"><h3>Estudiantes</h3></a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>docentes"><h3>Docentes</h3></a>
          </li>

          
          
        </ul>
      </div>
    </nav>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
  </html>