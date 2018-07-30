<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
 <link rel="stylesheet" href="../assets/css/styles.css">
 <title>ExpoMedia | Torneos</title>
</head>
<body class="BodyBg">
  <!-- inicio header -->
  <header>
    <!-- navbar -->
 <?php @include('../includes/menu2.php'); ?>
      <!-- navbar -->

      <!-- Imagen del header -->
      <div class="container-fluid">
        <div class="row">
          <div class="imgHeader col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="../assets/images/ex08.png" alt="Estudiante mujer posando con un cartel que dice arrgh, para que le realicen una foto como parte de la actividad del stand de fotografia"></div>
        </div>
      </div>
      <!-- imagen del header -->
    </header>
    <!-- fin del header -->
    <!-- titulo Stands -->
    <div class="container-fluid">
     <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 titlePage">
       <h1>STANDS</h1>
     </div>
   </div>
 </div>
 <!-- fin titulo Stands -->
<!-- Mapa de los Stands -->
 <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10"><img class="img-fluid" src="../assets/images/mapa_stands.png" alt="Ganadores-pasados-del-torneo-de-League-of-Legends"></div>
        
      </div>
    </div>
<!-- Mapa de los Stands -->
<div class="bgslider">
 <!-- Slider de imagenes -->
<div id="slideProductos" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators indicadores">
      <li data-target="#slideProductos" data-slide-to="0" class="active"></li>
      <li data-target="#slideProductos" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <!-- Primeros a mostrar -->
      <div class="carousel-item active">
        <div class="row clickModal justify-content-center">
          <div class="col-lg-2 col-3">
           <a href="#Modal1"> <img class="d-block w-100" src="../assets/images/red_read_redemption.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal1"></a>
          </div>
           <div class="col-lg-2 col-3">
            <a href="#Modal2"> <img class="d-block w-100" src="../assets/images/The_pillars_of_the_earth.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal2"></a>
          </div>
           <div class="col-lg-2 col-3">
            <a href="#Modal3"> <img class="d-block w-100" src="../assets/images/red_read_redemption.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal3"></a>
          </div>
           <div class="col-lg-2 col-3">
             <a href="#Modal4"> <img class="d-block w-100" src="../assets/images/The_pillars_of_the_earth.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal4"></a>
          </div>
        </div>
      </div>
      <!-- Primeros a mostrar -->

       <!-- Segundos a mostrar -->
      <div class="carousel-item ">
        <div class="row clickModal justify-content-center">
          <div class="col-lg-2 col-3">
           <a href="#Modal5"> <img class="d-block w-100" src="../assets/images/red_read_redemption.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal5"></a>
          </div>
           <div class="col-lg-2 col-3">
            <a href="#Modal6"> <img class="d-block w-100" src="../assets/images/The_pillars_of_the_earth.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal6"></a>
          </div>
           <div class="col-lg-2 col-3">
            <a href="#Modal7"> <img class="d-block w-100" src="../assets/images/red_read_redemption.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal7"></a>
          </div>
           <div class="col-lg-2 col-3">
             <a href="#Modal8"> <img class="d-block w-100" src="../assets/images/The_pillars_of_the_earth.png" class="btn btn-primary" data-toggle="modal" data-target="#Modal8"></a>
          </div>
        </div>
      </div>
      <!-- Segundos a mostrar -->
    
    </div>
    <a class="carousel-control-prev sigprev d-none d-lg-block" href="#slideProductos" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next sigprev d-none d-lg-block" href="#slideProductos" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>

    </a>
  </div>
<!-- Slider de imagenes -->
</div>
<!-- Modal1 -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">Red Dead Redemption</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/red_read_redemption.png">
           <p class="text-center">Video Juego</p>
           <p class="text-center">5 Mil</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal1 -->

<!-- Modal2 -->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">The Pillar Of The Earth</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/The_pillars_of_the_earth.png">
           <p class="text-center">VideoJuego</p>
           <p class="text-center">10 Mil</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->

<!-- Modal3 -->
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">Red Dead Redemption</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/red_read_redemption.png">
           <p class="text-center">VideoJuego</p>
           <p class="text-center">15 Mil</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal3 -->

<!-- Modal4 -->
<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">The Pillar Of The Earth</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/The_pillars_of_the_earth.png">
           <p class="text-center">VideoJuego</p>
           <p class="text-center">24Mil</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal4 -->

<!-- Footer -->

  <?php @include('../includes/footer.php'); ?>

<!-- fin del footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/scriptsNav2.js"></script>
</body>
</html>