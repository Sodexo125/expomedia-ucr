<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Expomedia | UCR</title>
</head>
<body id="bgIndex">
  <header>
    <?php @include('./includes/menu.php'); ?>
    <div id="videoITM" class="embed-responsive embed-responsive-16by9 videoHeader border-bottom">
      <video class="embed-responsive-item" src="./assets/video/videoHeader2.mp4" autoplay loop muted></video>
    </div>

    <div class="textHeader">
      <h1>EXPOMEDIA</h1>
    </div> 
  </header>
<main class="container">
  <div class="row justify-content-lg-center actividades">
    <div class="col-lg-12 text-center"><h1>ACTIVIDADES</h1></div>
  </div>
    <section class="row justify-content-lg-center">
      <div class="col-lg-12 text-center">
         <p class="textoIndex"> La carrera de Informática y Tecnología Multimedia les da la bienvenida a la Expomedia 2018. 
      Te invitamos a que asistas en las charlas y talleres impartidos por expertos invitados en su área de trabajo  y estudiantes de la universidad como fotografía, diseño de páginas web, software libre, big data, creación de videojuegos, modelado en 3D entre otros temas. </p>
      </div>
     
    </section>
</main>
<!-- Seccion completa del cronograma -->
<div class="container-fluid contCrono">
    <div class="row justify-content-lg-center">
      <div class="col-sm-3 col-lg-3 cronogramatitulo text-center">
        <h3>CRONOGRAMA</h3>
      </div>
      <div class="col-sm-9 col-lg-9 vacio">
        <h3>VIERNES 24 DE AGOSTO</h3>
      </div>
      
    </div>
    <div class="row cronogramabarra">
      <div class="col-sm-3 bgSlider">
        <!-- Input Range -->
        <section class="range-slider">
          <div class="rangeValues"></div>
          <input id="inputslide1" class="slider" value="7" min="7" max="15" step="1" type="range" onchange="cronograma();">
          <input id="inputslide2" class="slider" value="8" min="7" max="16" step="1" type="range">
        </section>
        <!-- Input Range -->
      </div>

      <div class="col-sm-9 cards">
        <!-- Primeros 4 a mostrar -->
        <div id="Activo7">
          <!-- Cada actividad -->
            <div class="col-lg-12">
              <div class="card w-85 espaciado">
            <div class="card-body">
              <h5 class="card-title">7:30-8:00</h5>
              <p class="card-text">Primeros</p>

            </div>
          </div>
            </div>
            <!-- Cada actividad -->

             <!-- Cada actividad -->
            <div class="col-lg-12">
              <div class="card w-85 espaciado">
            <div class="card-body">
              <h5 class="card-title">7:30-8:00</h5>
              <p class="card-text">Primeros</p>

            </div>
          </div>
            </div>
            <!-- Cada actividad -->

             <!-- Cada actividad -->
            <div class="col-lg-12">
              <div class="card w-85 espaciado">
            <div class="card-body">
              <h5 class="card-title">7:30-8:00</h5>
              <p class="card-text">Primeros</p>

            </div>
          </div>
            </div>
            <!-- Cada actividad -->

             <!-- Cada actividad -->
            <div class="col-lg-12">
              <div class="card w-85 espaciado">
            <div class="card-body">
              <h5 class="card-title">7:30-8:00</h5>
              <p class="card-text">Primeros</p>

            </div>
          </div>
            </div>
            <!-- Cada actividad -->
        </div>

        <!-- Fin de los primeros 4 a mostrar-->
      </div>


      
    </div>
  </div>
<!-- Seccion completa del cronograma -->
<!-- Slider de imagenes -->
<div id="slideshowactividades" class="carousel slide border-top" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slideshowactividades" data-slide-to="0" class="active"></li>
      <li data-target="#slideshowactividades" data-slide-to="1"></li>
      <li data-target="#slideshowactividades" data-slide-to="2"></li>
      <li data-target="#slideshowactividades" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets/images/actividad1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/actividad2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/actividad3.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/actividad4.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slideshowactividades" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#slideshowactividades" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>

    </a>
  </div>
<!-- Slider de imagenes -->
<div class="fond"></div>
<!-- Footer -->
<?php @include('./includes/footer.php'); ?>
<!-- fin del footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/scriptsNav.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>